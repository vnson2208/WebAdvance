<?php 

$conn = mysql_connect("localhost","root","") ;
// if ($conn) {
// 	echo "Connect thành công";
// } else {
// 	echo "Connect thất bại";
// }
mysql_select_db("sondz");
mysql_set_charset('utf8',$conn);
?>