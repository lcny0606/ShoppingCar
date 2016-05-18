<?php 
require_once "conn.php";

$name=$_POST["name"];
$price=$_POST["price"];
$ver=$_POST["ver"];
$remark=$_POST["remark"];



 $sql="insert into shopping (name,price,ver,remark) values('$name','$price','$ver','$remark') ";
mysql_query($sql,$con);


 $url='index.php';
echo "<script language='script' type='text/javascript'>
	window.location.href='$url';
	</script>
";





?>
