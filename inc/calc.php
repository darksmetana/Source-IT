<?php
$rows = 1;
if (isset($_COOKIE['znak'])) {
    $rows = $_COOKIE['znak'];
} else {
    setcookie('znak', $rows);
}

if (!empty($_POST)) {
    if (isset($_POST['znak'])) {
        $znak = $_POST['znak'];
        if ($znak == '+') {
            $rows++;
        } elseif ($znak == '-' && $rows > 1) {
            $rows--;
        }
        setcookie('znak', $rows);
    }
}
?>

<form name="plus" action="index.php?inc=calc" method="post">
    <input type="hidden" name="znak" value="+">
    <input type="submit" value="+">
</form>
<form name="minus" action="index.php?inc=calc" method="post">
    <input type="hidden" name="znak" value="-">
    <input type="submit" value="-">
</form>
<form name="main" action="index.php?inc=calc" method="post">
<?php
    for($i = 1; $i <= $rows; $i++) {
?>
        <input name="num1<?php echo $i; ?>" value="" style="width: 15%;">
        <select name="operation<?php echo $i; ?>" style="width: 15%;">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
					<option value="%">деление с остатком</option>
					<option value="**">корень</option>
				</select>
        <input name="num2<?php echo $i; ?>" value="" style="width: 15%;">
<?php
	
	if (isset($_POST["num1$i"])) {
		$num1 = $_POST["num1$i"];
	}
	if (isset($_POST["num2$i"])) {
		$num2 = $_POST["num2$i"];
	}
	if (isset($_POST["operation$i"])) {
		$oper	= $_POST["operation$i"];
	} else {
		$oper = "";
	}
	$res = "";

	switch($oper){
		case '+': $res .= $num1 + $num2; break;
		case '-': $res .= $num1 - $num2; break;
		case '*': $res .= $num1 * $num2; break;
		case '/':
		if($num2 == 0)
		$res = 'Деление на ноль запрещено!';
		else
		$res .= $num1 / $num2;
		break;
		case '%': $res .= $num1 % $num2; break;
		case '**': $res .= pow($num1, $num2); break;
	};
	if (isset($_POST["send"])) {
		echo " = <span style='border:1px solid black;padding: 2px;'>" . $res . "</span>";
	}
	echo "<br>";
    }
?>

    <input type="submit" value="Посчитать" name="send">
</form>
<?php 
	
	
?>
