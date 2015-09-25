<?php 
	if (isset($_POST['login']) or isset($_POST['username'])) {
			$username = $_POST['username'];
			$login = $_POST['login'];
			setcookie("login", "$login", time() + 3600, "/");
			setcookie("username", "$username", time() + 3600, "/");
			header("location: /inc/index.php");
	}
?>
