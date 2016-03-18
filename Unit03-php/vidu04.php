<?php 
	$mang1 = array(1,2,"Chúc mừng 8/3",5,3,"haha","Mai đẹp trai");
	$mang2 = array("hehe"=>2,4,4,8,4,6,"mang 2");

	echo "<pre>";
		print_r($mang1);
	echo "</pre>";

	$mang2 = array_change_key_case($mang2,CASE_UPPER); // viết hoa
	echo "<pre>";
		print_r($mang2);
	echo "</pre>";

	//nối value bảng này thành key bảng kia
	// echo "<pre>";
	// 	print_r(array_combine($mang1, $mang2));
	// echo "</pre>";
	//đêm phần tử trong mảng
	echo "<pre>";
	print_r(array_count_values($mang2));
	echo "</pre>";

	// //Thêm Phần tử
	// array_push($mang2,"giá trị 1","giá trị 2");
	// echo "<pre>";
	// 	print_r($mang2);
	// echo "</pre>";
	// //Thêm phần tử đầu tiên
	// array_unshift($mang2);
	// echo "<pre>";
	// 	print_r($mang2);
	// echo "</pre>";

	// // Xóa Phần Tử
	// array_pop($mang2);
	// echo "<pre>";
	// 	print_r($mang2);
	// echo "</pre>";

	// //Xóa phần tử đầu tiên
	// array_shift($mang2);
	// echo "<pre>";
	// 	print_r($mang2);
	// echo "</pre>";

	var_dump(array_key_exists("2", $mang2)); //True False

	$mang3 = array_unique($mang2); //Xóa trùng
	echo "<pre>";
		print_r($mang3);
	echo "</pre>";
 ?>