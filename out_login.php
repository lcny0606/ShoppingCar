<?php 
session_start();
unset($_SESSION['login']);
session_destroy();

$url = "login.php"; 
			$url = "login.php"; 
			 echo "<script language='javascript' type='text/javascript'>"; 
			 echo "window.location.href='$url'"; 
			 echo "</script>"; 


?>