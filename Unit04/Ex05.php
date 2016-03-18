<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài tập 05 Unit 4</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
	$str_fix= "zent group–lap,trinh|cung chuyen gia";
	echo "Chuỗi trước khi xử lý: $str_fix <br>";
		$str_out = str_replace("–"," ", $str_fix);
		$str_out2 = str_replace("|"," ", $str_out);
		$str_out3 = str_replace(","," ", $str_out2);// Thay đổi ký tự trong chuỗi
		echo "<br> Chuỗi sau khi loại bỏ ký tự đặc biệt: ".$str_out3;
		$str_out4 = str_replace("zent","Zent", $str_out3);
		$str_out5 = str_replace("group","Group", $str_out4);
		$str_out6 = str_replace("lap","Lap", $str_out5);
		$str_out7 = str_replace("trinh","Trinh", $str_out6);
		$str_out8 = str_replace("cung","Cung", $str_out7);
		$str_out9 = str_replace("chuyen","Chuyen", $str_out8);
		$str_all = str_replace("gia","Gia", $str_out9);
		echo "<br> Chuỗi in lại theo yêu cầu: $str_all"


 ?>
</body>
</html>