<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			margin: 0 auto;
		}
		.form {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php 
		error_reporting(E_ALL);
	?>
	<div class="form">
		<form action="/hw5/test.php" method="post">
			Введите Вашу страну:<br>
			<input type="text" name="country" required><br>
			<input type="submit" value="Отправить">
		</form>
			<br>
			<br>
			<hr>
			<br>
		<form action="/hw5/test.php" method="post">
			<input type="submit" name="age" value="Установить куку на 1 час"><br>
			<input type="submit" name="age1" value="Установить куку на 3 часа"><br>
			<input type="submit" name="age2" value="Установить куку на день"><br>
			<input type="submit" name="age3" value="Установить куку на год"><br>
			<input type="submit" name="age4" value="Установить куку на 10 лет"><br>
			<input type="submit" name="age5" value="Установить куку до конца текущего дня"><br>
			<input type="submit" name="age6" value="Установить куку до конца текущего года">
		</form>
			<br>
			<br>
			<hr>
			<br>
		<form action="/hw5/test.php" method="post">
			<input type="text" name="set_name">
			<input type="submit" name="set_cookie" value="Установить куку">
			<br><br>
			<input type="text" name="edit_name">
			<input type="submit" name="edit_cookie" value="Редактировать куку">
			<br><br>
			<input type="submit" name="delete_cookies" value="Удалить куки">
		</form>
			<br>
			<br>
			<hr>
			<br>
			<?php
			
			?>
		<style>
			.wrapper {
				position: relative;
				max-width: 980px;
				padding: 90px;
				overflow: auto;
			}
			.product {
				float: left;
				width: 32%;
				margin-top: 15px;
			}
			.p_img {
				width: 200px;
				height: 200px;
			}
			.img {
				width: 100%;
			}
			.cart {
				position: absolute;
				right: 10px;
				top: 10px;
			}
		</style>
	<?php
		$price1 = 110;
		$price2 = 120;
		$price3 = 130;
		$price4 = 140;
		$price5 = 150;
	?>
		

	<div class="wrapper">
		<div class="product">
			<div class="p_img"><img src="/img/p-1.jpg" alt="" class="img"></div>
			<div class="p_price"><?php echo "Цена: " . $price1; ?></div>
			<form action="/hw5/index.php" method="get">
				<input type="hidden" name="p_name1" value="Товар 1">Товар 1<br>
				<input type="submit" name="addtocart1" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-2.jpg" alt="" class="img"></div>
			<div class="p_price"><?php echo "Цена: " . $price2; ?></div>
			<form action="/hw5/index.php" method="get">
				<input type="hidden" name="p_name2" value="Товар 2">Товар 2<br>
				<input type="submit" name="addtocart2" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-3.jpg" alt="" class="img"></div>
			<div class="p_price"><?php echo "Цена: " . $price3; ?></div>
			<form action="/hw5/index.php" method="get">
				<input type="hidden" name="p_name3" value="Товар 3">Товар 3<br>
				<input type="submit" name="addtocart3" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-4.jpg" alt="" class="img"></div>
			<div class="p_price"><?php echo "Цена: " . $price4; ?></div>
			<form action="/hw5/index.php" method="get">
				<input type="hidden" name="p_name4" value="Товар 4">Товар 4<br>
				<input type="submit" name="addtocart4" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-5.jpg" alt="" class="img"></div>
			<div class="p_price"><?php echo "Цена: " . $price5; ?></div>
			<form action="/hw5/index.php" method="get">
				<input type="hidden" name="p_name5" value="Товар 5">Товар 5<br>
				<input type="submit" name="addtocart5" value="Добавить в корзину">
			</form>
		</div>
		<div class="cart">
		Корзина: <br>
		<?php
			session_start();
			if (isset($_GET['addtocart1'])) {	
				$_SESSION['p_name1'] = $_GET['p_name1'];
				$_SESSION['price1'] = $price1;
			} 
			if (isset($_GET['addtocart2'])) {
				$_SESSION['p_name2'] = $_GET['p_name2'];
				$_SESSION['price2'] = $price2;
			}
			if (isset($_GET['addtocart3'])) {
				$_SESSION['p_name3'] = $_GET['p_name3'];
				$_SESSION['price3'] = $price3;
			}
			if (isset($_GET['addtocart4'])) {
				$_SESSION['p_name4'] = $_GET['p_name4'];
				$_SESSION['price4'] = $price4;
			}
			if (isset($_GET['addtocart5'])) {
				$_SESSION['p_name5'] = $_GET['p_name5'];
				$_SESSION['price5'] = $price5;
			}
			if (empty($_GET)) {
				echo "В корзине нет товаров";
			} else {
				foreach ($_SESSION as $p) {
					echo $p . " ";
					if ($p == $_SESSION['price1'] or $_SESSION['price2'] or $_SESSION['price3'] or $_SESSION['price4'] or $_SESSION['price5']) {
					echo "грн<br>";
				}
				}
				
				$sum += $_SESSION['price1'] + $_SESSION['price2'] + $_SESSION['price3'] + $_SESSION['price4'] + $_SESSION['price5'];
				echo "На сумму: " . $sum;
			}
		?>
		</div>
	</div>
	<br>
			<br>
			<hr>
			<br>
			<?php
				$banner = '<img src="../img/banner.jpg" alt="Banner" width="500px" height="200px">';
				if (isset($_POST['hide_banner'])) {
					setcookie("hide_banner", "hide_banner", time() + 2629743);
					header("refresh:0");
				}
				if (isset($_COOKIE["hide_banner"])) {
					$banner = "";
				}
				echo $banner;
			?>
				<form action="/hw5/index.php" method="post">
					<input type="submit" name="hide_banner" value="Не показывать баннер">
				</form>
			
	</div>
</body>
</html>
