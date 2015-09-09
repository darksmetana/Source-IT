<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		$file = array('index' => 'index.php', 'about' => 'about.php', 'cont' => 'contacts.php', 'mt' => 'multi_table.php', 'calc' => 'calculator.php', );
	?>
	<table border="1" width="600">
		<tr><td colspan="2">header</td></tr>
		<tr><td>
		<table border="1" width="100%">
			<tr><td><a href="<?php $_GET['index'] ?>">Main</a></td></tr>
			<tr><td><a href="#">About</a></td></tr>
			<tr><td><a href="#">Contacts</a></td></tr>
			<tr><td><a href="#">Multiple table</a></td></tr>
			<tr><td><a href="#">Calculator</a></td></tr>
		</table>
		</td>
		<td><?php include '$file';?></td></tr>
		<tr><td colspan="2">footer</td></tr>
	</table>

	<?php 

	?>
	
</body>
</html>


