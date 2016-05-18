<?php 
	require_once "conn.php";
	session_start();
	$username=$_SESSION['name'];
	$sql="select * from persons where FirstName='$username'";
	$res=mysql_query($sql,$con);
	$row=mysql_fetch_array($res);
?>
<!DICTYPE HTML>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head> 
<body class="in_body">
	<div class="top">
		<a class="top_bj" href="person.php"><span>您好，<?php echo $row['FirstName']; ?></span><img  src="images/<?php echo $row['avatar']; ?>" width="32px" height="32px"></a>
		<a class="out_login" href="index.php">返回首页</a>
	</div>
	<div class="car_tab">
	<table>
		<?php 
			$sql="select *from car where username='$username'";
			$result=mysql_query($sql,$con);
			while($row=mysql_fetch_array($result)){
		?>
		
			<tr>
				<td>用户名</td>
				<td><?php echo $row["username"]; ?></td>
			</tr>
			<tr>
				<td>商品名</td>
				<td><?php echo $row["name"]; ?></td>
			</tr>
			<tr>
				<td>价格</td>
				<td><?php echo $row["price"]; ?></td>
			</tr>
			<tr>
				<td>数量</td>
				<td><?php echo $row["num"]; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div>
	
		
	</div>
</body>
</html>