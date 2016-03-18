<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ví dụ 02 - Unit 04</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
		//hàm cắt
		$str_zent = "zent Group - \"Be all you can be!\" <br>";
		echo $str_zent;
		var_dump(explode("-", $str_zent)); // cắt dòng , tham số truyền vào "\" là ký tự muốn cắt, 2 là chuỗi muốn cắt
		//hàm nối
		echo "<br>";
		$str_explode = explode("-", $str_zent);
		print_r($str_explode);
		echo implode('@',$str_explode);

		//hàm trả vê số ký tự trong một chuỗi
		echo "<br>".implode(" - " , $str_explode);
		echo "<br>".strlen($str_zent);
		echo "<br>".str_word_count($str_zent);
		echo str_repeat("Anh Yêu Em <br>", 10);

		$str_out = str_replace("a","AK", $str_zent);// Thay đổi ký tự trong chuỗi
		echo "<br>".$str_out;

		//mã hóa
		$matkhau = "<br>sondz";
		echo $matkhau."<br>";
		echo md5($matkhau);

		echo "<br>" .sha1($matkhau);

		echo "<br> Các bạn muốn in đậm chữ thì dùng cặp thẻ" .htmlentities("<b>input</b>"); // thẻ htmlentites là thẻ gán dòng lệnh lên trang web
		$input = "lap trinh web advanced 02 tại Zent Group";
		
		echo "<br>" .$input."<br>";
		echo substr($input, 8) ."<br>" ; //cắt mấy ký tự
		echo strstr($input,'web') ."<br>";//cắt tự vị trí nào

		echo ucfirst($input); //ucfirst là viết hoa chữ đầu

 ?>
</body>
</html>