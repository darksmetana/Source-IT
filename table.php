
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		$file = array('index' => 'includes/index.php', 'about' => 'includes/about.php', 'cont' => 'includes/contacts.php', 'mt' => 'includes/multi_table.php', 'calc' => 'includes/calculator.php');
	?>
	<table border="1" width="600">
		<tr><td colspan="2">header</td></tr>
		<tr><td>
		<table border="1" width="100%">
			<tr><td><a href="includes/index.php">Main</a></td></tr>
			<tr><td><a href="includes/index.php?includes=about">About</a></td></tr>
			<tr><td><a href="includes/index.php">Contacts</a></td></tr>
			<tr><td><a href="includes/index.php">Multiple table</a></td></tr>
			<tr><td><a href="includes/index.php">Calculator</a></td></tr>
		</table>
		</td>
		<td><?php include($_GET['includes']);?></td></tr>
		<tr><td colspan="2">footer</td></tr>
	</table>
	<?php 
	?>
</body>
</html>
