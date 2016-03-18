<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
	$r = 10;
	echo "Bán Kính Của Đường Tròn Là : R= $r <br>";
	function tinh($r){
		$pi=3.14;
		$cv = $r*2 * $pi;
		$dt = pow($r,2) * $pi;
		echo "Chu vi Của Đường tròn là: C= $cv <br>";
		echo "Diện Tích Của Đường Tròn là: S= $dt  ";
	}
	tinh($r);
 ?>
</body>
</html>