<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài Tập 04 Unit 4</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
		function vehinh($n){
		for($i = 1; $i <= $n; $i++){
				for($j = 0; $j < $n - $i; $j++)
					echo "&nbsp"; // &nbsp là khoảng trắng space
				for($j = 0; $j < $i; $j++){
					echo"*";
				}
				echo "<br>";
			}
}

		$n = 8;
		vehinh($n);	
 ?>
</body>
</html>