<?php
    function connect_db() {
        return new mysqli('localhost', 'root', 'root', 'library', 3306);
    }

    function get_user_by_email_password($email, $password) {
        return connect_db()->query
        ("
            SELECT email, password
            FROM users
            WHERE email='".$email."'
            AND password='".$password."'
        ");
    }

    function save_user($firstname, $lastname, $email, $phone, $password) {
        $date = date('Y-m-d H:i:s');
        if (mysqli_num_rows(get_user_by_email_password($email, $password)) != 0) {
            echo 'Пользователь уже существует';
        } else {
            return connect_db()->query("
          INSERT INTO users
          (
              first_name,
              last_name,
              email,
              phone,
              password,
              created_at
          )
          VALUES
          (
              '$firstname',
              '$lastname',
              '$email',
              '$phone',
              '$password',
              '$date'
          )
          ");

        }
    }

    if (isset($_POST['reg'])) {
                            $user = '';
                            $firstname = trim(htmlspecialchars($_POST['first_name']));
                            $lastname = trim(htmlspecialchars($_POST['last_name']));
                            $email = trim(htmlspecialchars($_POST['email']));
                            $phone = trim(htmlspecialchars($_POST['phone']));
                            $password = md5(trim(htmlspecialchars($_POST['password'])));
                                echo $firstname . ", " . $lastname . ", " . $email . ", " . $phone . ", " . $password;
                            if (save_user($firstname, $lastname, $email, $phone, $password)) {
                                session_start();
                                $_SESSION['user'] = $firstname;
                                header('location: /hw7/site.php');
                            }
    }

    if (isset($_POST['login'])) {
        $a_email = trim(htmlspecialchars($_POST['auth_email']));
        $a_password = md5(trim(htmlspecialchars($_POST['auth_password'])));
        if (mysqli_num_rows(get_user_by_email_password($a_email, $a_password)) != 0) {
            session_start();
            $_SESSION['auth_user'] = $a_email;
            header('location: /hw7/site.php');
        } else {
            echo "Пользователь не найден!";
        }
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="auth_email" placeholder="Enter your email" required/>
        <input type="password" name="auth_password" placeholder="Enter your password" required/>
        <input type="submit" name="login" value="Log In"/>
    </form>

    <form action="index.php" method="post">
        <input type="text" name="first_name" placeholder="Enter your first name"/>
        <input type="text" name="last_name" placeholder="Enter your last name"/>
        <input type="text" name="email" placeholder="Enter your email" required/>
        <input type="text" name="phone" placeholder="Enter your phone"/>
        <input type="password" name="password" placeholder="Enter your password" required/>
        <input type="submit" name="reg" value="Register"/>
    </form>
</body>
</html>