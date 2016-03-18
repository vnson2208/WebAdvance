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
echo "Phương trình bậc 2 : 5x^2 +10x + 5= 0 <br>";
$a=5;
$b=10;
$c=5;
function PTbachai($a,$b,$c){
	if ($a==0) {
		if ($b==0) {
			echo "Phương trình vô nghiệm";
		} else {
			$x  =  -$c/$b;
			echo "Phương trình có nghiệm : $x";
		}
	} else {
		$delta = pow($b,2)-4*$a*$c;
		if ($delta < 0 ) {
			echo "Phương trình vô nghiệm";
		}else if ($delta == 0){
			echo "Phương trình có nghiệm kép x1=x2= " .-($b/2*$a);
			echo "<br>";
		}else{
			$can=sqrt($delta);
			$x1=(-$b+$can)/(2*$a);
			$x2=(-$b-$can)/(2*$a);
			echo "Phương trình có 2 nghiệm phân biệt x1= $x1 ,x2= $x2";
		}
	}

}
PTbachai($a,$b,$c);

echo "<br>";
echo "<br>";

echo "Phương trình bậc 2 : 5x^2 +2x + 5= 0 <br>";
$a=5;
$b=2;
$c=5;
function PTbachai2($a,$b,$c){
	if ($a==0) {
		if ($b==0) {
			echo "Phương trình vô nghiệm <br>";
		} else {
			$x  =  -$c/$b;
			echo "Phương trình có nghiệm : $x <br>";
		}
	} else {
		$delta = pow($b,2)-4*$a*$c;
		if ($delta < 0 ) {
			echo "Phương trình vô nghiệm <br>";
		}else if ($delta == 0){
			echo "Phương trình có nghiệm kép x1=x2= " .-($b/2*$a);
			echo "<br>";
		}else{
			$can=sqrt($delta);
			$x1=(-$b+$can)/(2*$a);
			$x2=(-$b-$can)/(2*$a);
			echo "Phương trình có 2 nghiệm phân biệt x1= $x1 ,x2= $x2 <br>";
		}
	}
}
PTbachai2($a,$b,$c);

echo "<br>";
echo "<br>";

echo "Phương trình bậc 2 : 2x^2 +5x + 1= 0 <br>";
$a=2;
$b=5;
$c=1;
function PTbachai3($a,$b,$c){
	if ($a==0) {
		if ($b==0) {
			echo "Phương trình vô nghiệm<br>";
		} else {
			$x  =  -$c/$b;
			echo "Phương trình có nghiệm : $x <br>";
		}
	} else {
		$delta = pow($b,2)-4*$a*$c;
		if ($delta < 0 ) {
			echo "Phương trình vô nghiệm <br>";
		}else if ($delta == 0){
			echo "Phương trình có nghiệm kép x1=x2= " .-($b/2*$a);
			echo "<br>";
		}else{
			$can=sqrt($delta);
			$x1=(-$b+$can)/(2*$a);
			$x2=(-$b-$can)/(2*$a);
			echo "Phương trình có 2 nghiệm phân biệt x1= $x1 ,x2= $x2 <br>";
		}
	}
}
PTbachai3($a,$b,$c);

echo "<br>";
echo "<br>";

echo "Phương trình bậc 2 : 0x^2 +5x + 1= 0 <br>";
$a=0;
$b=5;
$c=1;
function PTbachai4($a,$b,$c){
	if ($a==0) {
		if ($b==0) {
			echo "Phương trình vô nghiệm <br>";
		} else {
			$x  =  -$c/$b;
			echo "Phương trình có nghiệm : $x <br>";
		}
	} else {
		$delta = pow($b,2)-4*$a*$c;
		if ($delta < 0 ) {
			echo "Phương trình vô nghiệm <br>";
		}else if ($delta == 0){
			echo "Phương trình có nghiệm kép x1=x2= " .-($b/2*$a);
			echo "<br>";
		}else{
			$can=sqrt($delta);
			$x1=(-$b+$can)/(2*$a);
			$x2=(-$b-$can)/(2*$a);
			echo "Phương trình có 2 nghiệm phân biệt x1= $x1 ,x2= $x2 <br>";
		}
	}
}
PTbachai4($a,$b,$c);

echo "<br>";
echo "<br>";

echo "Phương trình bậc 2 : 0x^2 +0x + 1= 0 <br>";
$a=0;
$b=0;
$c=1;
function PTbachai5($a,$b,$c){
	if ($a==0) {
		if ($b==0) {
			echo "Phương trình vô nghiệm <br>";
		} else {
			$x  =  -$c/$b;
			echo "Phương trình có nghiệm : $x <br>";
		}
	} else {
		$delta = pow($b,2)-4*$a*$c;
		if ($delta < 0 ) {
			echo "Phương trình vô nghiệm <br>";
		}else if ($delta == 0){
			echo "Phương trình có nghiệm kép x1=x2= " .-($b/2*$a);
			echo "<br>";
		}else{
			$can=sqrt($delta);
			$x1=(-$b+$can)/(2*$a);
			$x2=(-$b-$can)/(2*$a);
			echo "Phương trình có 2 nghiệm phân biệt x1= $x1 ,x2= $x2 <br>";
		}
	}
}
PTbachai5($a,$b,$c);
 ?>

</body>
</html>