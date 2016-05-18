<?php 
session_start();

?>


<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body class="login_body ">
<div class="login_body_mid">
	<div class="login_body_top"></div>
	<form action="login_check.php" method="post" class="car_mid">
		<p>登录</p>
		
		<table>
			<tr>
				<td width="30px;" height="70px">账号</td>
				<td><input type="text" name="username" class="inp"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="password" class="inp"></td>
			</tr>
			<tr>
				<td><input type="button" class="register" name="register" value="注册"></td>
				<td height="70px" ><input type="submit" name="login" class="btn" value="登录"></td>
			</tr>
		</table>
	</form>
	
</div>
	<!--注册弹框--->
	<div class="reg_mid">
	<form action="register_insert.php" method="post" class="box_form">
		<table>
			<tr>
				<td width="60px" height="40px">用户名</td>
				<td height="40px" width="200px"><input type="text" name="username" class="reg_inp"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td height="40px"><input type="password" name="password" class="reg_inp"></td>
			</tr>
			<tr>
				<td>年龄</td>
				<td><input type="text" name="age" class="reg_inp_age"></td>
			</tr>
			<tr>
				<td width="60px">注册协议</td>
				<td height="40px"><input type="checkbox" checked id="reg_check"><a href="javascript:">同意注册协议</a></td>
			</tr>
			<tr>
				<td ><input type="submit" id="reg_btn" value="注册"></td>
				<td ><a href="login.php">←←←←返回登录</a></td>
			</tr>
		</table>
	</form>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/shopping.js"></script>
</body>
</html>