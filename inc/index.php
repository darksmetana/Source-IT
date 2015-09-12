<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		$file = array(
						'index' => 'index.php', 
						'about' => 'about.php', 
						'contacts' => 'contacts.php', 
						'multiple' =>'multiple.php', 
						'calc' => 'calc.php'
		);
	?>
	<table border="1" width="600">
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
		 	echo "Its index.php";
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
