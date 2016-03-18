<?php 
	header('Content-Type: text/html; charset=utf-8');
	print_r("<h3> BÀI TẬP VỀ NHÀ UNIT 03 . <br> NGUYỄN ĐỨC VIỆT </h3>");
 ?>
<!--// Bài 1 : -->
	<?php 
		header('Content-Type: text/html; charset=utf-8');
		echo " <h4> Bài 1 : Viết chương trình tính giai thừa của N. <br> </h4>";

		// Bài làm : 

		$n=6;
		$giaiThua=1;
		for ($i=1; $i<=$n ; $i++) { 
				$giaiThua=$giaiThua*$i;
		}
		echo "Giá trị của $n! = $giaiThua <br>";
	 ?>


<!-- Bài 2 :  -->
	<?php 
		header('Content-Type: text/html; charset=utf-8');
		echo "<h4> <br> Bài 2 : Viết chương trình giải phương trình bậc 2: ax^2+bx+c = 0 </h4> ";
		// Bài làm : 
		$a=2; echo "a = $a";
		$b=5; echo "<br> b = $b";
		$c=2; echo "<br> c = $c";
		if($a==0){ //Kiểm tra a # 0 thì là pt bậc 2
			$x = -$c/$b;
			echo "<br> Phương trình có 1 nghiệm x = $x";
		}else{			
			$delta=($b*$b) - (4*$a*$c);
			echo " <br> delta = $delta";

			if($delta>0){
				$x1 = -$b + (sqrt($delta)/2*$a);
				$x2 = -$b - (sqrt($delta)/2*$a);
				echo "<br> Phương trình có 2 nghiệm phân biệt x1 = $x1 ,  x2 = $x2 <br>";
			} else if ($delta<0) {
				echo "<br> Phương trình vô nghiệm";
			} else {
				$x1 = $x2 = -$b/(2*$a);
				echo "<br> Phương trình có nghiệm kép : x1 = x2 = $x1";
			}
		}
	 ?>



<!-- Bài 3 : -->
	<?php 
	header('Content-Type: text/html; charset=utf-8');
		echo " <h4> <br>Bài 3 :  Viết chương trình tính dân số của một thành phố sau 10 năm nữa, <br> biết rằng dân số hiện nay là 6.000.000, tỉ lệ tăng dân số hàng năm là 1.8% . </h4>";

		// Bài làm : 
		$danSo = 6000000; 			
		$nam = 2016;
		for ($i=0; $i<10; $i++) { 
				$danSo += $danSo * 0.018;	
				$nam ++ ;
				round($danSo,8);	
				echo "Dân số năm $nam = $danSo <br>  ";		
		}
		echo "Dân số của thành phố sau 10 năm là : $danSo người ";
	?>	


<!-- // Bài 4 :  -->
	<?php 
	header('Content-Type: text/html; charset=utf-8');
		echo "<h4><br> Bài 4 : Khởi tạo mảng gồm 10 số nguyên bằng cách random, tìm số nguyên lớn nhất in ra màn hình.
			<br> Random 10 phần tử của mảng : </h4> ";

			// Bài làm
		function taomang1($n){
			$mang1 = array();
			for ($i=0; $i < $n ; $i++) { 
				do {
					$a = rand(1,100);
				} while (in_array($a, $mang1) == true ); 
				$mang1[$i+1] = $a;
			}
			return $mang1;
		}
		echo "<pre>";
			$mang1 = taomang1(10);
			print_r($mang1);
		echo "</pre>";

		echo "Phần tử lớn nhất của mảng = "; 
		echo (max($mang1));

		echo "<br> Phần tử nhỏ nhất của mảng = "; 
		echo (min($mang1));
	 ?>


<!-- Bài 5 :  -->
	<?php 
	header('Content-Type: text/html; charset=utf-8');
		echo " <h4> <br> Bài 5 :  Khởi tạo mảng gồm 10 số nguyên bằng cách random, sắp xếp mảng theo thứ tự tăng dần. 
			<br> In ra màn hình trước khi sắp xếp và sau khi sắp xếp.
			<br> Random 10 phần tử của mảng :  <h4>";

 		// Bài làm :
		function taomang2($n){
			$mang2 = array();
			for ($i=0; $i < $n ; $i++) { 
				do {
					$a = rand(1,100);
				} while (in_array($a, $mang2) == true ); 
				$mang2[$i+1] = $a;
			}
			return $mang2;
		}
		echo "<pre>";
			$mang2 = taomang2(10);
			print_r($mang2);	
			echo "Sắp xếp mảng theo thứ tự tăng dần : "; 
			$mangTangDan = asort($mang2);
			print_r($mang2);
		echo "</pre>";
 	?>



<!-- Bài 6 : -->

	<?php 
	header('Content-Type: text/html; charset=utf-8');
		echo "<h4> <br> Bài 6 : Khởi tạo mảng gồm 10 số nguyên bằng cách random. Tính tổng các phần tử ở vị trí chẵn - lẻ - tính tổng của mảng. </h4> ";
		function taomang3($n){
			$mang3 = array();
			for ($i=0; $i < $n; $i++) { 
				do {
					$s = rand(1,100);
				} while (in_array($s, $mang3) == true);
				$mang3[$i+1] = $s;
			}
			return $mang3;
		}

		echo "<pre>";
		$mang3 = taomang3(10);
		print_r($mang3);
		$sum = 0;
		$tong_chan = 0;
		$tong_le = 0;
		$n = 10;
		for($k = 1; $k <=count($mang3); $k++)
		{           
		    if (($mang3[$k] % 2) == 0){
		        $tong_chan += $mang3[$k];
		    }else{
		        $tong_le += $mang3[$k];
		    }
		    	$sum += $mang3[$k]; 
		}
		echo"<h4>";
			echo "Tổng các số ở chẵn của dãy =  $tong_chan ";
			echo "<br>Tổng các số ở vị trí lẻ = $tong_le";
			echo "<br>Tổng các phần tử = $sum"; 
			echo"</h4>";
	 ?>