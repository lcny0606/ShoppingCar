<?php
	session_start();
	require_once "conn.php";
	?>
<!DICTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<div class="person_top">
	<span class="person_p">个人资料</span>
	<span class="person_return">
		<a href="index.php"><img src="images/left.jpg" height="15px" width="50px"><span>返回首页</span></a>
	</span>
</div>
<div class="person_mid">
	
		
		<table >
		<?php 
		$username=$_SESSION['name'];
		 $sql="select * from persons where FirstName='$username'";
		 $result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result)
		?>
			<tr >
				<td colspan='2'>
					<?php 
						if($row['avatar']==0){ ?>
							<div class="avatar">
								<a class="avatar_cir" href="javascript:">
									<img src="images/touxiang.png" width="55px" height="55px">
								</a>
								<form action="update.php" method="post" enctype="multipart/form-data">
									<input type="file" name="file" id="file" /> 
									<input type="hidden" name="username" value="<?php echo $username; ?>">
									<input type="submit" name="submit" value="确定更换" /> 
								
								</form>
							</div>
						<?php } else{?>
								<div class="avatar">
								<a class="avatar_cir" href="javascript:">
									<img src="images/<?php echo $row['avatar']; ?>" width="100px" height="100px">
								</a>
								<form action="update.php" method="post" enctype="multipart/form-data">
									<input type="file" name="file" id="file" /> 
									<input type="hidden" name="username" value="<?php echo $username; ?>">
									<input type="submit" name="submit" value="确定更换" /> 
								
								</form>
							</div>
						
						<?php } ?>
				
				</td>
			</tr>
			<form action="person_updata.php" method="post">
			<tr>
				<td  width="80px" height="60px">用户名</td>
				<td  width="190px" ><input type="text" name="firstname" value="<?php echo $row['FirstName'] ?>" readonly class="person_inp"></td>
			</tr>	
			<tr>
				<td width="80px" height="60px">昵 称</td>
				<td><input type="text" name="nickname" value="<?php echo $row['nickname'] ?>" class="person_inp"></td>
			</tr>
			<tr>	
				<td width="80px" height="60px"> 年 龄</td>
				<td><input type="text" name="age" value=" <?php echo $row['Age'] ?>" class="person_inp"></td>
			</tr>
			<tr>
				<td width="80px" height="60px">联系电话</td>
				<td><input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="person_inp"></td>
			</tr>
			<tr>
				<td width="80px" height="60px">收货地址</td>
				<td><input type="text" name="address" value="<?php echo $row['address'] ?>" class="person_inp"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" class="person_sub" value="保存"></td>
			</tr>
		
		 </table>
		 
	</form>
</div>
</body>
</html>