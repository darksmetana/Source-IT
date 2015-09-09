<?php

    setcookie("name", "", time(now));
    if (isset($_COOKIE['name'])) {
        $count = $_COOKIE[''];
        $count++;
    } else {
        echo "Hello, it is your first visit!";
    }
    echo "Hi, it's your $count visit";
?>
