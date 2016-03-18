<?php 
	// $a = 10;
	// $b = 20;
	// echo $a+$b;
	// % chia lấy dư
	// != khác
	// || hoặc
	// && đồng thời thỏa mãn


	// Cấu trúc điều khiển lặp
	$a = 2;

	// if ($a%4 == 0 && $a%100 != 0){
	// 	echo "Đây là năm nhuận!<br>";
	// }else{
	// 	echo $a ." Không phải là năm nhuận <br>";
	// }

	//Switch case

	switch($a){
		case 2:
		echo "Hom nay là thứ Hai";
		break;
		case 3:
		echo "Hom nay là thứ Ba";
		break;
		case 4:
		echo "Hom nay là thứ Tư";
		break;
		case 5:
		echo "Hom nay là thứ Năm";
		break;
		case 6:
		echo "Hom nay là thứ Sáu";
		break;
		case 7:
		echo "Hom nay là thứ Bảy";
		break;
		case 8:
		echo "Hom nay là Chủ Nhật";
		break;

		
	}
	//vòng lặp for:
		for ($i=0; $i < 10 ; $i++) { 
			echo "<br>$i";
		}

		//vòng lặp while
		$j=0;
		while ( $j<= 10) {
			echo "<br>$j";
			$j++;
		}

		//vòng lặp do while
		$k=0;
		do {
			echo "<br>$k";
			$k++;
		}while ($k<= 10);

		//Ex
		$mang = array(1,2,3,5,3,"haha","8/3");
		for ($i=0; $i < count($mang); $i++) { 
			echo "<br> phần tử tại vị trí $i có giá trị: $mang[$i]";
		}

		//Ex while
		$tang = 0;
		while ($tang< count($mang)) {
			echo "<br>Phần tử tại vị trí $tang có giá trị: $mang[$tang]";
			$tang++;	
			}
			//Vòng lặp foreacch
			echo "<br> Vòng lặp foreach";
			foreach ($mang as $key => $value) {
				if($value =='haha') die;
				echo "<br>Phần tử tại vị trí $key có giá trị: $value";
			}	
 ?>