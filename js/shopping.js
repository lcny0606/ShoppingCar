$(function(){
	$(".register").click(function(){
		$(".login_body_mid").addClass("box_black");
		$(".reg_mid").css("display","block");
	})
	$(".jion").click(function(){
		var car_id=$(this).next().val();
		//console.log(car_id);
		var username=$(this).nextAll().eq(1).val();
		//console.log(username);
		$(".car_add").css("display","block").fadeOut(1000);
			$.ajax({
				type:"post",
				url:"./car_insert.php",
				datatype:"json",
				data:{"ID":car_id,"username":username},
				success:function(){
					//console.log(data);
				}
			
				
		})
	})
})