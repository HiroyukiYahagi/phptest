<?php

	//echo "test";

	 //データベースに書き込み
	 $employeeId = str_pad($_GET['employeeId'], 4, "0", STR_PAD_LEFT);
	 $answer_num = $_GET['answer_num'];
	 $questionId = $_GET['questionId'];
	 //$employeeName = $_GET['employeeName'];

	 $link = mysql_connect('localhost', 'user', 'pass');
	 if (!$link) {
 //    	die('接続失敗です。'.mysql_error());
	 }

	 $db_selected = mysql_select_db('test', $link);
	 if (!$db_selected){
	     die('データベース選択失敗です。'.mysql_error());
	 }

	 //echo "test2";
	 $sql = "INSERT INTO answers (employeeId, questionId, answerNumber) VALUES (".$employeeId.", ".$questionId.", ".$questionId.")";
	 $result_flag = mysql_query($sql);
	 //$result = mysql_query('INSERT INTO answers SET employeeId = "'.$employeeId.'" , questionId = "'.$questionId.'", answer_num='.$answer_num );

	if (!$result_flag) {
     	die('INSERTクエリーが失敗しました。'.mysql_error());
     	//echo "1";
	}

	mysql_close($link);
	$msg="あなたは".$answer_num."番と解答しました．";
	//header('Location: waiting.php?employeeId='.$employeeId.'&msg='.$msg, true, 301);
	// echo $msg;
	exit();

?>