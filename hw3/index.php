<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	//Работа с регистром символов
	echo "<h1>Работа с регистром символов:</h1>";
	//1.
	echo "<h4>1.</h4>";
	echo strtoupper('Hello world!');
	echo "<h4>2.</h4>";
	//2.
	echo strtolower("PHP");
	echo "<h4>3.</h4>";
	//3.
	echo ucfirst('moscow');
	echo "<h4>4.</h4>";
	//4.
	$a = 'MOSCOW';
	echo ucfirst(strtolower($a));
	echo "<h4>5.</h4>";
	//5.
	echo ucfirst('Ivanov Ivan Ivanovich');
	//Работа с strlen, substr
	echo "<h1>Работа с strlen, substr:</h1>";
	//6.
	echo "<h4>6.</h4>";
	$str = "ya uchu PHP!";
	echo strlen($str);
	//7.
	echo "<h4>7.</h4>";
	$str = "ya uchu PHP!";
	echo substr("$str", -9);
	//8.
	echo "<h4>8.</h4>";
	$str = "ya uchu PHP!"; #Задаем строку в переменную $str 
	$n = 7; #Задаем число для сравнения с количеством символов в строке
	if (strlen($str) > $n) { #Если длинна строки меньше числа в переменной $n
		$result = substr($str, 0, $n) . "..."; #Присваиваем переменной $result результат вырезания первых $n символов из строки $str и добавляем "..."
		echo "$result"; #Выводим результат
	} else { //Если условие ложно
		$result = $str; //Присваиваем переменной $result значение переменной $str
		echo "$result"; //Выводим результат
	};
	//9.
	echo "<h4>9.</h4>";
	$s = "qwertyuiopasdfghjklQWERTYUIOPASDFGHJKL1234567890@"; //задаем символы, которые будут использоваться при генерации пароля
	$m = 7; //задаем количество символов в пароле
	$size = strlen($s) -1; //определяем количество символов для негерации в переменной $s
	$pass = null; //создаем пустую переменную
	while ($m--) { 									//дано количество символов (7)
		$pass .= $s[mt_rand(0, $size)];	//записываем в переменную $pass случайно сгенерированные символы из переменной $s в количестве от 0 до $size
	};															//
	echo "$pass"; //выводим готовый, сгенерированный пароль в браузер
	//10.
	echo "<h4>10.</h4>";
	$password = $pass; //Задаем сгенерированный пароль из предыдущего задания
	if (strlen($password) > 5) { //если количество символов больше 5
		echo "Correct password!";  //выводим сообщение, что пароль правильный
	} elseif (strlen($password) < 10) { //если символов меньше 10
		echo "Incorrect password! Invent else!"; //выводим сообщение, что пароль не правильный
	};
	//11.
	echo "<h4>11.</h4>";
	$i = 9; //Задаем количество символов по горизонтали
	$str = 1; //задаем любое количество символов
	while ($i--) //дан обратный счетчик 
  echo str_repeat(' ', $i).str_repeat('x ', substr($str, 0, 1) + $i)."<br>"; //выводим функцию повторения строки, указываем количество символов по горизонтали с помощью переменной $i и с помощью substr() указываем, количество строк
  //Работа с str_replace
	echo "<h1>Работа с str_replace:</h1>";
  //12.
	echo "<h4>12.</h4>";
	$str = 'Ya-uchu-PHP!';
	echo str_replace("-", " ", "$str");
  //13.
	echo "<h4>13.</h4>";
	$str = '31.12.2013';
	echo str_replace(".", "-", $str);
  //14.
	echo "<h4>14.</h4>";
	$sm = array("<img src=\"img/sm_1.png\" alt=\":)\" width=\"100px\" height=\"100px\">", "<img src=\"img/sm_2.png\" alt=\":(\" width=\"100px\" height=\"100px\">", "<img src=\"img/sm_3.png\" alt=\"^_^\" width=\"100px\" height=\"100px\">");
	$smls = array(":)", ":(", "^_^");
	$str = "улыбка - $smls[0], печалька - $smls[1], ня - $smls[2]";
	echo str_replace($smls, $sm, $str);
  //15.
	echo "<h4>15.</h4>";
	$str = "строка русского текста";
	$arr = str_split($str);
	$en = array("s", "t", "r", "o", "k", "a", " ", "r", "u", "s", "s", "k", "o", "g", "o", " ", "t", "e", "k", "s", "t", "a");
	$translit = str_replace($arr, $en, $str);
	echo $translit . "<br>";
	echo str_replace($en, $arr, $str) . "<br>";
	//Работа с explode, implode
	echo "<h1>Работа с explode, implode:</h1>";
	//16.
	echo "<h4>16.</h4>";
	$str = 'я учу PHP!';
	$arr = explode(" ", $str);
	var_dump($arr);
	echo "<br>$arr[0] $arr[1] $arr[2]";
	//17.
	echo "<h4>17.</h4>";
	$arr = array('html', 'css', 'php', 'js');
	$str = implode(", ", $arr);
	var_dump($str);
	echo "<br>$str";
	//18.
	echo "<h4>18.</h4>";
	$date = '2013-12-31';
	$arr = explode("-", $date);
	var_dump($arr);
	echo "<br>$arr[0], $arr[1], $arr[2]";
	$date = implode(".", $arr);
	var_dump($date);
	echo "<br>$date";
	//19.
	echo "<h4>19.</h4>";
	$date = '2013.12.31';
	$arr = explode(".", $date);
	var_dump($arr);
	echo "<br>$arr[0], $arr[1], $arr[2]";
	$date = implode("-", $arr);
	var_dump($date);
	echo "<br>$date";
	//Работа с trim, ltrim, rtrim
	echo "<h1>Работа с trim, ltrim, rtrim:</h1>";
	//20.
	echo "<h4>20.</h4>";
	$str = ' php ';
	echo trim($str) . "<br>";
	echo ltrim($str) . "<br>";
	echo rtrim($str);
	//Работа с strip_tags и htmlspecialchars
	echo "<h1>Работа с strip_tags и htmlspecialchars:</h1>";
	//21.
	echo "<h4>21.</h4>";
	$str = 'html, <b>php</b>, js';
	echo strip_tags($str);
	//22.
	echo "<h4>22.</h4>";
	$str = 'html, <b>php</b>, js';
	echo htmlspecialchars($str);
	//Работа с chr и ord
	echo "<h1>Работа с chr и ord:</h1>";
	//23.
	echo "<h4>23.</h4>";
	$a = 'a';
	echo ord($a);
	echo "<br>";
	$b = "b";
	echo ord($b);
	echo "<br>";
	$c = "c";
	echo ord($c);
	echo "<br>";
	$space = " ";
	echo ord($space);
	//24.
	echo "<h4>24.</h4>";
	echo chr(33);
	//25.
	echo "<h4>25.</h4>";
	$str = chr(86);
	echo $str;
	//26.
	echo "<h4>26.</h4>";
	for ($len=chr(100); $len < chr(110); $len++) {
		$str = $len;
		echo $str;
	};
	//Работа с substr_count, str_word_count, str_split
	echo "<h1>Работа с substr_count, str_word_count, str_split:</h1>";
	//27.
	echo "<h4>27.</h4>";
	$str = "Мама мыла раму";
	echo substr_count($str, "а");
	echo "<br>";
	echo substr_count($str, "м");
	//28.
	echo "<h4>28.</h4>";
	$str = "PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.";
	echo str_word_count($str, 0);
	echo "<br>";
	echo strlen($str);
	//29.
	echo "<h4>29.</h4>";
	$arr = array('а', 'е', 'ё', 'и', 'о', 'у', 'э', 'я');
	$str = "Проверьте, является ли пара слов палиндромом (одинаково читается во всех направлениях, кот­ток, нос­сон)";
	$arr1 = array(
				$arr[0] => substr_count($str, $arr[0]),
				$arr[1] => substr_count($str, $arr[1]),
				$arr[2] => substr_count($str, $arr[2]),
				$arr[3] => substr_count($str, $arr[3]),
				$arr[4] => substr_count($str, $arr[4]),
				$arr[5] => substr_count($str, $arr[5]),
				$arr[6] => substr_count($str, $arr[6]),
				$arr[7] => substr_count($str, $arr[7])
				
		);
	var_dump($arr1);
	//Работа с str_repeat, strrev
	echo "<h1>Работа с str_repeat, strrev:</h1>";
	//30.
	echo "<h4>30.</h4>";
	$str = "кот";
	echo strrev($str);
?>
</body>
</html>
