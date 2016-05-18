<?php 
	require_once "conn.php";
	
	$username=$_POST['firstname'];
	$nickname=$_POST['nickname'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	
	$sql="update persons set nickname='$nickname',Age='$age',phone='$phone',address='$address' 
	where FirstName='$username'";
	mysql_query($sql,$con);

	echo "<script language='javascript'>window.location.href='person.php';</script>";







?>