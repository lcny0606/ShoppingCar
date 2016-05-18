<?php 

$aa="";
$bb="";
if(!($aa||$bb)){
	echo 222;
}

	require_once "conn.php";
	$sql="select * from shopping";
	$result=mysql_query($sql,$con);
	print_r(mysql_fetch_array($result));
	echo 111;
/*  	while($row = mysql_fetch_array($result)){

	 echo $row["name"]; 
	 echo $row["price"]; 
 	 echo $row['ver']; 
	 echo $row['remark']; 
		
 } */
	
	
	
	
	
	
	
	
	
	
?>