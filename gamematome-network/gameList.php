<?php
	

	$link = mysql_connect("mysql016.phy.lolipop.lan", "LAA0523611", "h1yahag1");
	
	if(!$link){
		die('接続失敗です。'.mysql_error());
	}
	
	// MySQLに対する処理
	
	$db_selected = mysql_select_db('LAA0523611-gamematome', $link);
	if (!$db_selected){
	    die('データベース選択失敗です。'.mysql_error());
	}

	mysql_set_charset('utf8');
	$result = mysql_query('SELECT * FROM game_test');
	if (!$result) {
    	die('クエリーが失敗しました。'.mysql_error());
	}
	
	header("Content-Type: text/xml; charset=utf-8");
	echo '<?xml version="1.0" encoding="utf-8"?>
	<data>';

	//user分ループして表示
	while ($row = mysql_fetch_assoc($result) ) {
		echo '<game>';
    	echo '<id>'.$row['id'].'</id>';
    	echo '<name>'.$row['name'].'</name>';
		echo '</game>';
	}

	echo '</data>';

	$close_flag = mysql_close($link);

?>
