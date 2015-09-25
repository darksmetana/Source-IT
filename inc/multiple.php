<form action="index.php?inc=multiple" method="POST" style="text-align: center;">
	Введите цвет ячеек:<br>             <input type="text" name="color"><br>
	Введите количество строк:<br>       <input type="text" name="rows"><br>
	Введите количество колонок:<br>     <input type="text" name="colls"><br>
	<input type="submit" name="ok" value="Применить">
</form>
<br>
<table border='1'>
<?php
	if (isset($_POST['ok'])) {
		for ($rows=1; $rows <= $_POST['rows']; $rows++) { 
			for ($colls=1; $colls <= $_POST['colls']; $colls++) { 
				echo "<td style='background-color: " . $_POST['color'] . ";'>" . ($rows*$colls) . "</td>";
			}
			if ($rows != $_POST['rows']) echo "<tr>" . "</tr>";
		}
	}
?>
</table>
