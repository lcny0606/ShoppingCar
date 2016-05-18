
<?php 

	$con=mysql_connect("localhost","root","");
	if(!$con){
		die("could not connent:".mysql_error());
	}
	mysql_select_db("shoppingcar",$con);
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$age=$_POST["age"];
	if($username==""||$password==""){
		echo "<script>alert('请输入')</script>";
	}else{
	
	$sql="insert into persons (FirstName,LastName,Age)values ('$username','$password','age')";
	mysql_query($sql,$con);
	$url = "login.php"; 
			 echo "<script language='javascript' type='text/javascript'>"; 
			 echo "window.location.href='$url'"; 
			 echo "</script>"; 
	
	}
	

?>