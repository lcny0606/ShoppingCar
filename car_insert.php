<?php 
	require_once("conn.php");
	$ID=$_POST['ID'];
	$user=$_POST['username'];
	echo $ID;
	 $sel="select * from shopping where id='$ID'";
	$res=mysql_query($sel,$con);
	$row=mysql_fetch_array($res);
		$name=$row['name'];
		$price=$row['price'];
		
		
	$sql="insert into car (name,price,username) values('$name','$price','$user')";
	$result=mysql_query($sql);
	 



?>