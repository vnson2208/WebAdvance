<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ví dụ 01 - Unit 4</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	vidu ve ham
	function KiemtraChanLe($input){
		if ($input%2==0) {
			echo "Số $input là số chẵn";
		}else{
			echo "Số $input là số lẻ";
		}
	}
		$a=101;
		KiemtraChanLe($a);


		// var_dump trả kết quả true or false
		function KiemtraChanLe($input){
		if ($input%2==0) {
			return true;
		}else{
			return false;
		}
	}
	echo "<br>";
		$a=101;
		var_dump(KiemtraChanLe($a));
		echo "<br>";
		$b=29;
		if (KiemtraChanLe($a)) {
			echo "Số $b là số chẵn <br>";
		}else{
			echo "Số $b là số lẻ <br>";
		}


		//hàm tính tổng!

		function TinhTong($a=false,$b = false){
			if($b==false){
				return $a;
			}elseif ($a==false) {
				return $b;
			}return $a+$b;
			
		}
		echo TinhTong(2,4); 
		echo "<br>";

		//biến toàn cục và biến cục bộ
		$bien_toan_cuc = 10;
		function TinhHieu(){
			$bien_cuc_bo = 11;
			global $bien_toan_cuc;
			echo $bien_cuc_bo + $bien_toan_cuc;
			echo "<br>";
		}
		TinhHieu();

		//biến tĩnh
		function BienTinh(){
			static $bien_tinh=10;
			echo $bien_tinh +=2 ;
			echo "<br>";
		}
		
		BienTinh();
		BienTinh(); // hàm tĩnh tồn tại mãi

		//hàm tham trị và tham chiếu
		function HamThamTri($a){ //
			$a+=1;
			return $a;
		}

		function HamThamChieu(&$a){ // tác động trực tiếp vào vùng nhớ và thay đổi nó "dấu &"
			$a+=1;
			return $a;
		}

		$x =10;
		echo "Giá trị của hàm tham trị là: " .HamThamTri($x)."<br>";
		echo  "Giá trị của x sau khi gọi hàm tham chiếu là: " .$x ."<br>";
 
		$y =10;
		echo  "Giá trị của hàm tham trị là: " .HamThamChieu($y) ."<br>";
		echo "Giá trị của x sau khi gọi hàm tham chiếu là: " .$y ."<br>";


		
 ?>
</body>
</html>