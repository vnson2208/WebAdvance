<?php
	function getAllNew(){
$sql = "select * from TBL_NEW";
		return mysql_query($sql);
		
	}
		
 ?>