<?php
	//int
	$a= 10;
	// số thực
	$b = 2.4;
	//kiểu bool
	$isBoy = true;
	//Chuỗi;
	$name = " Đây là kiểu chuỗi !";
	$name1= 'chuỗi';

	//Kiểu mảng
	$array_name = array();

	//Cách 1:
	$arr_name = array("Tùng","Huân","Hiếu");
	$arr_name[] = "Hiếu OC"; // Thêm vào mảng
	// <pre> giữ nguyên hiện trạng!
	echo "<pre>"; // Giữ dấu cách , xuống dòng
	print_r($arr_name);
	echo "</pre>";
	//Cách 2:
	$arrayName = array(0 => 'Tung', 2=>'Tuấn' );
	echo "<pre>"; // Giữ dấu cách , xuống dòng
	print_r($arrayName);
	echo "</pre>";

	$arrayName1 = array('name' => 'Tùng', 'old'=>'3' );
	echo "<pre>"; // Giữ dấu cách , xuống dòng
	print_r($arrayName1);
	echo "</pre>";

	//Mảng 2 chiều:
	$a = array();
	$a[0][0]=10;
	$a[0][1]=15;
	echo "Demo mảng 2 chiều : " .$a[0][1];

 ?>