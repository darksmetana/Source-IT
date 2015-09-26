<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework 3. Forms</title>
	<style>
		input {
			width: 400px;
		}
	</style>
</head>
<body>
		<!--1.Создайте форму, сделайте поле ввода, в которое пользователь
	вводит год (4 цифры), а скрипт определяет високосный ли год.
	1.1 (+1​) Сделать проверку на формат и количество введенных
	значений. Если есть ошибка ­ уведомить об этом пользователя.-->
	<h4>1.</h4>
	<form action="form.php" method="post">
		<input type="text" name="year" placeholder="Введите год (4 цифры)">
	</form>
	<?php
	if ($_POST['year'] % 4 == 0) {
		echo $_POST['year'] . " год является высокосным.";
	} else {
		echo "Это не высокосный год!";
	}
	if (strlen($_POST['year']) <= 4 xor strlen($_POST['year']) >= 4) {
		echo "Ошибка! Введите 4-х значный год!";
	}	
	?>

		<!--2.Сделайте форму, создайте поле ввода, в которое необходимо
	вводить дату в формате: '31.12.2013'. С помощью функций
	explode и mktime переведите эту дату в формат timestamp.
	Узнайте день недели (словом) за введенную дату.
	-->
	<h4>2.</h4>
	<form action="form.php" method="post">
	<input type="text" name="date" placeholder="Введите дату в формате 31.12.2013">
	</form>
	<?php
		$arr = explode(".", $_POST['date']);
		echo "День недели, согласно введенной дате: " . date("l", mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]));
	?>
		<!--3.Сделайте форму, которая спрашивает дату в формате
	'2013­12­31'. С помощью функций explode и mktime переведите
	эту дату в формат timestamp. Узнайте месяц (словом) за
	введенную дату.
	-->
	<h4>3.</h4>
	<form action="form.php" method="post">
	<input type="text" name="date2" placeholder="Введите дату в формате 2013­-12­-31">
	</form>
	<?php
		$date = explode("-", $_POST['date2']);
		echo "Месяц, согласно введенной дате: " . date("F", mktime(0, 0, 0, $date[1], $date[2], $date[0]));
	?>
		<!--4.Сделайте форму, которая спрашивает у пользователя дату в
	формате '2013­12­31T12:59:59'. С помощью функций explode и
	mktime переведите эту дату в формат timestamp. Узнайте месяц
	(словом) за введенную дату. Подсказка: explode следует
	применить дважды.
	-->
	<h4>4.</h4>
	<form action="form.php" method="post">
	<input type="text" name="date3" placeholder="Введите дату и время в формате 2013­-12­-31T12:59:59">
	</form>
	<?php
		$datime = explode("T", $_POST['date3']);
		$date2 = explode("-", $datime[0]);
		$time = explode(":", $datime[1]);
		echo "Месяц, согласно введенной дате: " . date("F", mktime($time[0], $time[1], $time[2], $date2[1], $date2[2], $date2[0]));
	?>

		<!--5.Сделайте форму, которая спрашивает две даты в формате
	'2013­12­31'. Первую дату запишите в переменную $date1, а
	вторую в $date2. Сравните, какая из введенных дат больше.
	Выведите ее на экран.
	-->
	<h4>5.</h4>
	<form action="form.php" method="post">
	<input type="text" name="fdate" placeholder="Введите первую дату в формате 2013­-12­-31"><br>
	<input type="text" name="sdate" placeholder="Введите вторую дату в формате 2013­-12­-31"><br>
	<input type="submit" name="submit" value="Отправить">
	</form>
	<?php
		$date1 = $_POST['fdate'];
		$date2 = $_POST['sdate'];
		if ($date1 >= $date2) {
			echo $date1;
		} 
		if ($date1 <= $date2) {
			echo $date2;
		};
	?>
		<!--6..Сделайте форму, которая спрашивает дату­время в формате
	'2013­12­31T12:13:59'. С помощью функции strtotime
	преобразуйте ее в формат '12:13:59 31.12.2013'.
	-->
	<h4>6.</h4>
	<form action="form.php" method="post">
	<input type="text" name="date4" placeholder="Введите дату и время в формате 2013­-12­-31T12:59:59">
	<input type="submit" name="submit" value="Отправить">
	</form>
	<?php
		$date1 = strtotime($_POST['date4']);
		echo date('H:i:s d.m.Y', $date1);
	?>

		<!--7.Создайте форму с элементом ввода. При вводе даты прибавьте к
	дате 31.12.2013 один день. Результат выведите в том же
	формате.
	7.1. (+1​) Добавьте к форме два элемента типа radio button
	которые будут определять формат ввода: dd.mm.YY и YY.mm.dd. В
	зависимости от формата ввода должен быть такой же формат
	вывода.
	-->
	<h4>7.</h4>
	<form action="form.php" method="post">
	<input type="text" name="date4" placeholder="Введите дату в формате 31.12.2013">
	<input type="submit" name="submit" value="Отправить">
	</form>
	<?php
		$date1 = strtotime($_POST['date4'] . "+1day");
		echo date('d.m.Y', $date1);
	?>

		<!--8.Создайте форму с элементом ввода. В поле вводится дата в
	формате '2013­12­31'. Прибавьте к этой дате 1) 2 дня, 2) 1
	месяц и 3 дня, 3) 1 год. Отнимите от этой даты 3 дня.
	Результат выведите на экран.
	-->
	<h4>8.</h4>
	<form action="form.php" method="post">
	<input type="text" name="date4" placeholder="Введите дату в формате 2013--12--31">
	<input type="submit" name="submit" value="Отправить">
	</form>
	<?php
		$date1 = strtotime($_POST['date4'] . "+2day" . "+1month +3day" . "+1year" . "-3day");
		echo date('Y-m-d', $date1);
	?>

</body>
</html>
