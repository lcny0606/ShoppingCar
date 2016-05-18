<?php 
$con=mysql_connect("localhost","root","");
if(!$con){
	die("could not connect:".mysql_error());
}
mysql_select_db("shoppingcar",$con);



$username=$_POST["username"];
$password=$_POST["password"];
if($username==""||$password==""){
	 echo "<script>alert('用户名和密码不能为空');history.go(-1);</script>";
}else{

	$sql="select FirstName,LastName from persons where FirstName='$username'and LastName='$password'";
	$result=mysql_query($sql,$con);
	 $num = mysql_num_rows($result);  
	 if($num==0){
		 echo "<script>alert('用户名和密码不正确');history.go(-1);</script>";
	}else{
		session_start();
		 $_SESSION['login']=true;
		 $_SESSION['name']=$username;
			$url = "index.php"; 
			 echo "<script language='javascript' type='text/javascript'>"; 
			 echo "window.location.href='$url'"; 
			 echo "</script>"; 
		 
	}
	

}


?>