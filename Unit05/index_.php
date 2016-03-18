<?php 
	require "dbconect.php";
	require "query.php";
	$news = getAllNew();
	while ($a_news = mysql_fetch_assoc($news)){
		echo "<pre>";
		print_r($a_news);
		echo "</pre>";
		
	}
	// //mysql_fetch_assoc($news); //đọc từng bản ghi trong gói

	// print_r($news);

 ?>