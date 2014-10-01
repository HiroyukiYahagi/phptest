<?php 

	//社員番号が不正なら戻る
	$employeeId = $_POST['employeeId'];
	if(strlen($employeeId) != 4){
		header('Location: error.php?err_msg=社員番号を4ケタで入力してください', true, 301);
		exit();
	}


	$link = mysql_connect('localhost', 'user', 'pass');
	if (!$link) {
    	die('接続失敗です。'.mysql_error());
	}

	$db_selected = mysql_select_db('test', $link);
	if (!$db_selected){
	    die('データベース選択失敗です。'.mysql_error());
	}

	$result = mysql_query('SELECT * FROM employees where employeeId = "'.$employeeId.'"');
	//$result = ture;

	$num_rows = mysql_num_rows($result);

	//echo "$num_rows Rows\n";
	//exit();

	if ($num_rows === 0) {
    	//ログイン失敗時
		mysql_close($link);
		header('Location: error.php?err_msg=社員番号が間違っています', true, 301);
		echo $employeeId;
		exit();
	}

	while ($row = mysql_fetch_assoc($result) ) {
		$employeeName=$row['employeeName'];

		//ログイン成功時
		mysql_close($link);
		header('Location: waiting.php?employeeId='.$employeeId.'&employeeName='.$employeeName, true, 301);
		exit();
	}

?>