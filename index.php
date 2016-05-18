<?php 
	require_once "conn.php";
	session_start();
	if(!isset($_SESSION['login'])){
		 $url="login.php";
				
			 echo "<script language='javascript' type='text/javascript'>"; 
			 echo "window.location.href='$url'"; 
			 echo "</script>" ; 
	}
	$username=$_SESSION['name'];
	$sql="select * from persons where FirstName='$username'";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
?>


<!DOCTYPE HTML>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head> 
<body class="in_body">
<div class="top">
	<a class="top_bj" href="person.php"><span>您好，<?php echo $row['FirstName']; ?></span><img  src="images/<?php echo $row['avatar']; ?>" width="32px" height="32px"></a>
	<a class="out_login" href="out_login.php">退出登录</a>
</div>
	
<div class="mid">

	<form action="insert.php" method="post" class="input">
		<span>名称</span><input type="text" name="name">
		<span>价格</span><input type="text" name="price">
		<p class="zhang"></p>
		<span>选项</span><input type="text" name="ver">
		<span>备注</span><input type="text" name="remark" value="无">
		<input type="submit" name="submit" value="提交" id="sub">
	</form>
	<hr>
	
	<table class="tab">
		<tr>
			<td width="120px" height="30px">名称</td>
			<td width="120px" >价格</td>
			<td width="120px">选项</td>
			<td width="120px">备注</td>
			<td></td>
		</tr>
	<?php 
	$sql="select * from shopping";
	$result=mysql_query($sql,$con);
	while($row = mysql_fetch_array($result)){
	?>
	<tr>
	
	<td height="30px" width="100px" ><?php echo $row["name"]; ?></td>
	<td > <?php echo $row["price"]; ?></td>
 	<td ><?php echo $row['ver']; ?></td>
	<td ><?php echo $row['remark']; ?></td>
	<td>
		<input type="button" class="jion" value="加入">
		<input type="hidden" value="<?php echo $row['id']?>" class="car_id">
		<input type="hidden" value="<?php echo $username; ?>" class="username">
	</td>
	</tr>
		
	<?php } ?>
	
	
	</table>
	
</div>

<div class="car clearfix">
<div class="car_add"><img src="images/catry.png" width="60px" height="32px"></div>
<a href="car.php" class="car_click">

	<img src="images/cat_nber.jpg">
	<span>去结算</span>
</a>
</div>
<script type="text/javascript" src="js/shopping.js"></script>
</body>
</html>