<?php
    session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello, " . $_SESSION['user'] . "!<br>Ваш email: " . $_SESSION['auth_user'];
    ?>
</body>
</html>