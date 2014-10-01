<?php

	header('Content-type: text/plain; charset=UTF-8');
	header('Content-Transfer-Encoding: binary');
	$rss = 'http://pazusoku.blog.fc2.com/?xml';
	$xml = simplexml_load_file($rss);
	
	$items = $xml->item;
	foreach($items as $item) {
		echo $item->title;
		echo $item->link;
		$stringWithImageURL = $item->children('content', true)->encoded;
		$buffer1 = explode('<img src="',$stringWithImageURL);
		$buffer2 = explode('"',$buffer1[1]);
		//echo $buffer2[0];
		$data = file_get_contents($buffer2[1]);
		echo $item->children('dc', true)->date;
	}	
	
?>
