<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			margin: 0 auto;
			text-align: center;
		}
		form {
			text-align: center;
		}
	</style>
</head>
<body>
<?php 
	if (isset($_POST['country'])) {
		setcookie('country', $_POST['country']);
		header("location: test.php");
	}
	if (isset($_COOKIE['country'])) {
		echo "Ваша страна: " . $_COOKIE['country'] . '<br>';
		echo "<form action='test.php' method='post'><input type='submit' name='delete_cookie' value='Удалить куки'></form>";
		if (isset($_POST['delete_cookie'])) {
			setcookie('country', "");
			header("location: index.php");
		}
	}

	if (isset($_POST['age'])) {
		setcookie('age', mt_rand(10, 70), time() + 3600);
	}

	if (isset($_POST['age1'])) {
		setcookie('age1', mt_rand(10, 70), time() + 10800);
	}

	if (isset($_POST['age2'])) {
		setcookie('age2', mt_rand(10, 70), time() + 86400);
	}

	if (isset($_POST['age3'])) {
		setcookie('age3', mt_rand(10, 70), time() + 31556926);
	}

	if (isset($_POST['age4'])) {
		setcookie('age4', mt_rand(10, 70), time() + 315569260);
	}

	if (isset($_POST['age5'])) {
		setcookie('age5', mt_rand(10, 70), mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')));
	}

	if (isset($_POST['age6'])) {
		setcookie('age6', mt_rand(10, 70), mktime(0, 0, 0, 1, 1, date('Y') + 1));
	}

	

	if (isset($_POST['set_cookie'])) {
		setcookie("name", $_POST["set_name"]);
	}

	if (isset($_POST["edit_cookie"])) {
		setcookie("name", $_POST["edit_name"]);
	}

	if (isset($_POST["delete_cookies"])) {
		setcookie("name", "");
	}


	 
	

?>	
</body>
</html>
