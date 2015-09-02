<?php

$a = 3;
echo $a . '<br><br>';

$a = 10;
$b = 2;

echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a % $b . '<br>';
echo $a / $b . '<br><br>';

$c = 15;
$d = 2;
$result = $c + $d;

echo $result . '<br><br>';

$a = 10;
$b = 2;
$c = 5;

echo $a + $b + $c . '<br><br>';

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;

echo $a + $b + $c + $d . '<br><br>';

$text = 'Привет, Мир!<br><br>';

echo "$text";

$text1 = 'Привет, ';
$text2 = 'Мир!';

echo "$text1" . "$text2<br>";
echo $text1 .= $text2 . '<br><br>';

$text = 'Мама мыла раму!';

echo "$text[6], " . $text{2} . ", " . $text[strlen($text) -4] . ", " . $text{strlen($text) -2} . ", " . substr($text, -1) . "<br><br>";

$game = "Путешественник";
echo $game[4] . $game[5] . $game[6] . $game[7] . $game[8] . $game[12] . $game[9] . ', ' . $game[8] . $game[5] . $game[6] . $game[7] . $game[10] . $game{strlen($game)-2} . $game{strlen($game)-1} . ', ' . $game[8] . $game{9} . $game[10] . $game{strlen($game)-2} . $game[13] . ' <br><br>';
$n = 9;
$nm = -9;
echo $n * $n . " " . $nm * $nm . "<br><br>";

$var = 3;
$var = $var + 5;
$var = $var * 10;
echo $var . "<br><br>";

$arr = array('joomla', 'wordpress', 'netcat');
echo var_dump($arr) . "<br><br>";

echo "$arr[0], $arr[1], $arr[2]" . "<br><br>";

$arr = array('html', 'css', 'php');
echo "$arr[2], $arr[0], $arr[1]" . '<br><br>';

$arr = array(2, 5, 3, 9);
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result . '<br><br>';

$arr = array('a', 'b', 'c', 78);
$arr[4] = 'a';
$arr[5] = 'b';
$arr[6] = 'c';
$arr[7] = 78;
echo "$arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5], $arr[6], $arr[7], <br><br>";

$arr = array('Я', 'учу', 'PHP', '!');
echo "$arr[0] $arr[1] $arr[2] $arr[3] <br><br>";

$arr = array('a', 'b', 'c', 'd', 'e');
$var = $arr[1] = 'c';
$var = $arr[2] = 'b';
echo "$arr[0], $arr[1], $arr[2], $arr[3], $arr[4] <br><br>";

$arr = array('a', 'b', 'c', 'd', 'e');

$var = $arr[0] = 'e';
$var = $arr[1] = 'd';
$var = $arr[2] = 'c';
$var = $arr[3] = 'b';
$var = $arr[4] = 'a';

echo "$arr[0], $arr[1], $arr[2], $arr[3], $arr[4] <br><br>";

$arr = array('text'=>'текст!', 1=>'125', 'key'=>'element');
var_dump($arr);
echo "<br><br>";

$arr = array('Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$');
echo "$arr[Коля] <br>$arr[Петя] <br><br>";

$arr = array('i' => 'Я', 'study' => 'учу', 'php' => 'PHP', 'sing' => '!');
echo "$arr[i] $arr[study] $arr[php] $arr[sing] <br><br>";

$arr = array(
    'cms' => array('joomla','wordpress', 'drupal'),
    'colors' => array('blue' => 'голубой','red' => 'красный', 'green' => 'зеленый')
);
echo $arr["cms"][0] . ', ' . $arr["cms"][2] . ', ' .  $arr["colors"]["green"] . ', ' . $arr["colors"]["red"] . '<br><br>';

$arr = array(
    "ru" => array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"),
    "en" => array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
);
echo $arr["ru"][0] . ' ' . $arr["en"][0] . '<br><br>';

$var1 = array('joomla','wordpress', 'drupal');
$var2 = 'привет!';
$var2 = 23;
$var3 = '23';
$var4 = true;
$var5 = 'true';
$var6 = 2.5;
$var7 = null;
echo gettype($var1) . '<br>';
echo gettype($var2) . '<br>';
echo gettype($var3) . '<br>';
echo gettype($var4) . '<br>';
echo gettype($var5) . '<br>';
echo gettype($var6) . '<br>';
echo gettype($var7) . '<br><br>';

$a = 0;
if ($a == 0) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 0;
if ($a > 0) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 0;
if ($a < 0) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 0;
if ($a >= 0) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 0;
if ($a <= 0) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 0;
if ($a != 0) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 0;
if ($a == 'test') {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 0;
if ($a === '1') {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a;
if (empty($a)) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 123;
if (!empty($a)) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a;
if (isset($a)) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = '';
if (!isset($a)) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$var = true;
if ($var == true) {
    echo "Верно!";
} else {
    echo "Неверно!";
};
echo "<br>";
$var = true;
if ($var == true) echo "Верно!";
else echo "Неверно!";

echo "<br><br>";

$test = true;
if ($test != true) {
    echo "Верно!";
} else {
    echo "Неверно!";
};
echo "<br>";
$test = true;
if ($test != true) echo "Верно!";
else echo "Неверно!";

echo "<br><br>";

$a = -3;
if ($a > 0) {
    echo "Верно!";
} elseif ($a < 5) {
    echo "Верно!";
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 5;
$b = 1;
if ($a <= 1) {
    echo $a + $b;
} elseif ($b >= 3) {
    echo $a + $b;
} else {
    echo "Неверно!";
};

echo "<br><br>";

$a = 6;
if ($a > 0) {
    echo $a + 1;
} elseif ($a < 5) {
    echo $a + 1;
} else {
    echo $a + 5;
};

echo "<br><br>";

$a = 1;
$b = 14;
if ($a > 2) {
    echo $a + 2;
} elseif ($a < 1) {
    echo $a + 2;
} elseif ($b == 6) {
    echo $a + 2;
} elseif ($a < 14) {
    echo $a + 2;
} else {
    echo $a + 5;
};

echo "<br><br>";

$lang = 'ru';
if ($lang == 'ru'){
    $arr = array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье");
} else {
     if ($lang == 'en'){
         $arr = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
     }
};
echo $arr[0];

echo "<br><br>";

$month = "Сентябрь";
switch ($month) {
    case 'Январь':
        echo "Скоро наступит $month";
        break;
    case 'Февраль':
        echo "Скоро наступит $month";
        break;
    case 'Март':
        echo "Скоро наступит $month";
        break;
    case 'Апрель':
        echo "Скоро наступит $month";
        break;
    case 'Май':
        echo "Скоро наступит $month";
        break;
    case 'Июнь':
        echo "Скоро наступит $month";
        break;
    case 'Июль':
        echo "Скоро наступит $month";
        break;
    case 'Август':
        echo "Скоро наступит $month";
        break;
    case 'Сентябрь':
        echo "Скоро наступит $month";
        break;
    case 'Октябрь':
        echo "Скоро наступит $month";
        break;
    case 'Ноябрь':
        echo "Скоро наступит $month";
        break;
    case 'Декабрь':
        echo "Скоро наступит $month";
        break;
};

echo "<br><br>";

$day = 3;
switch ($day) {
    case '1':
        echo "Первая декада";
        break;
    case '2':
        echo "Первая декада";
        break;
    case '3':
        echo "Первая декада";
        break;
    case '4':
        echo "Первая декада";
        break;
    case '5':
        echo "Первая декада";
        break;
    case '6':
        echo "Первая декада";
        break;
    case '7':
        echo "Первая декада";
        break;
    case '8':
        echo "Первая декада";
        break;
    case '9':
        echo "Первая декада";
        break;
    case '10':
        echo "Первая декада";
        break;
    case '11':
        echo "Вторая декада";
        break;
    case '12':
        echo "Вторая декада";
        break;
    case '13':
        echo "Вторая декада";
        break;
    case '14':
        echo "Вторая декада";
        break;
    case '15':
        echo "Вторая декада";
        break;
    case '16':
        echo "Вторая декада";
        break;
    case '17':
        echo "Вторая декада";
        break;
    case '18':
        echo "Вторая декада";
        break;
    case '19':
        echo "Вторая декада";
        break;
    case '20':
        echo "Вторая декада";
        break;
    case '21':
        echo "Третья декада";
        break;
    case '22':
        echo "Третья декада";
        break;
    case '23':
        echo "Третья декада";
        break;
    case '24':
        echo "Третья декада";
        break;
    case '25':
        echo "Третья декада";
        break;
    case '26':
        echo "Третья декада";
        break;
    case '27':
        echo "Третья декада";
        break;
    case '28':
        echo "Третья декада";
        break;
    case '29':
        echo "Третья декада";
        break;
    case '30':
        echo "Третья декада";
        break;
    case '31':
        echo "Третья декада";
        break;
};

echo "<br><br>";

$asd = 8;
switch ($asd) {
    case 1:
        echo "Зима";
        break;
    case 2:
        echo "Зима";
        break;
    case 3:
        echo "Весна";
        break;
    case 4:
        echo "Весна";
        break;
    case 5:
        echo "Весна";
        break;
    case 6:
        echo "Лето";
        break;
    case 7:
        echo "Лето";
        break;
    case 8:
        echo "Лето";
        break;
    case 9:
        echo "Осень";
        break;
    case 10:
        echo "Осень";
        break;
    case 11:
        echo "Осень";
        break;
    case 12:
        echo "Зима";
        break;
};
?>
