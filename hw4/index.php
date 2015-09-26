<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
	<style>
		#log {
			max-width: 150px;
			margin: 0 auto;
			margin-top: 100px;
		}
	</style>
</head>
<body>
<?php 
	if (empty($_COOKIE['login']) or empty($_COOKIE['username'])) {
			
			die('<form action="/inc/auth.php" method="POST" id="log"><input type="text" name="username" required placeholder="Set your name!"><br><input type="text" name="login" required placeholder="Set your login!"><br><input type="submit" name="enter" value="Log In"></form>');
	}
	// if (isset($_POST['login']) or isset($_POST['username'])) {
	// 		$username = $_POST['username'];
	// 		$login = $_POST['login'];
	// 		setcookie("login", "$login", time() + 3600, "/");
	// 		setcookie("username", "$username", time() + 3600, "/");
	// 		header("location: /inc/index.php");
	// }
	if (isset($_COOKIE['login']) or isset($_COOKIE['username'])) {
			echo "<span class='txt'>Hello, " . $_COOKIE['username'] . "!<br><form action='index.php' method='post'><input type='submit' name='logout' value='Log Out'></form></span>";
	}
	if (isset($_POST["logout"])) {
				setcookie("login", "", time() - 3600, "/");
				setcookie("username", "", time() - 3600, "/");
				header("location: /inc/index.php");
	}			
	?>

	<?php
		$file = array(
						'index' => 'index.php', 
						'about' => 'about.php', 
						'contacts' => 'contacts.php', 
						'multiple' =>'multiple.php', 
						'calc' => 'calc.php'
		);
	?>
	<table border="1" width="600" class="main">
		<tr><td colspan="2">header</td></tr>
		<tr><td>
		<table border="1" width="100%">
			<tr><td><a href="index.php">Main</a></td></tr>
			<tr><td><a href="index.php?inc=about">About</a></td></tr>
			<tr><td><a href="index.php?inc=contacts">Contacts</a></td></tr>
			<tr><td><a href="index.php?inc=multiple">Multiple table</a></td></tr>
			<tr><td><a href="index.php?inc=calc">Calculator</a></td></tr>
		</table>
		</td>
		<td>
		<?php
		if (!empty($_GET)) {
		include($_GET['inc'] . ".php");
		 } else {
		 	echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt at ab corrupti rem optio porro excepturi quos dolore nostrum possimus nam, vitae, voluptates ipsa consectetur suscipit fugiat praesentium. Repellendus, doloribus.";
		 }
		?>
		</td>
		</tr>
		<tr><td colspan="2">footer</td></tr>
	</table>
	<?php 
	?>
</body>
</html>
