<?php 
	require_once "conn.php";

?>
<html>
<head>

</head>
<body>
	<div>
		<p>结账</p>
		<table>
			<tr>
				<td colspan="4">商品</td>
				<td>价格</td>
				<td>数量</td>
				<td>总价</td>
			</tr>
			<tr>
				
			
			</tr>
			<tr>
				<td colspan="4"></td>
				<td>2</td>
				<td>￥85</td>
			</tr>
		</table>
		<table>
			<tr>
				<td colspan="2">地址</td>
			</tr>
			<tr>
				<td>姓名</td>
				<td><input type="text" name=""></td>
				<td>省份</td>
				<td>
					<select>
						<option>北京省</option>
						<option>江苏省</option>
						<option>浙江省</option>
						<option>上海</option>
						<option>广东省</option>
						<option>西藏省</option>	
					</select>
				</td>
				<td>城市</td>
				<td><input type="text" name=""></td>
				<td>街道</td>
				<td><input type="text" name=""></td>
				
			</tr>
		</table>
		
		<input type="button" class="checkout_btn" >
	</div>
</body>
</html>