<?php 
//isset(var)
//empty(var)
	if (isset($a)) {
		echo "OK - isset <br>";
	}else{
		echo "not ok <br>";
	}

	if (empty($a)) {
		echo "ok <br>";
	}else{
		echo "Not OK<br>";
	}

	$array_input = array(1,4,2,5,7);

	function tinhtongDeQuy($a){
		if ($a==1) {
			return $a;
		}else{
			return $a+tinhtongDeQuy($a-1);
		}
	}
	echo tinhtongDeQuy(10);
 ?>