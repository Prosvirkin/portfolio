<?php
session_start();
header("HTTP/1.0 401 Unauthorized");
require_once "secure.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim(strip_tags($_POST["login"]));
    $password = trim(strip_tags($_POST["password"]));
    $ref = trim(strip_tags($_GET["ref"]));
    if (!$ref)
        $ref = '/admin';
    if ($login && $password) {
        if ($result = userExists($login)) {
            list($_, $hash) = explode(":", $result);
            if (checkHash($password, $hash)) {
                $_SESSION['admin'] = true;
                header("Location: $ref");
                exit;
            } else {
                $title = "Неправильное имя пользователя или пароль!";
            }
        } else {
            $title = "Неправильное имя пользователя или пароль!";
        }
    } else {
        $title = "Заполните все поля формы!";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/libs/bootstrap/bootstrap-grid-3.3.1.min.css"/>
    <link rel="stylesheet" href="/libs/font-awesome-4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/fonts.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="stylesheet" href="/css/media.css"/>
</head>
<body>

<div class="home-content">
    <section style="margin-top: -100px" class="feedback">
        <div class="container">
            <h1> Авторизация </h1>
            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                <div>
                    <label>Логин</label>
                    <input type="text" name="login"/>
                </div>
                <div>
                    <label>Пароль</label>
                    <input type="password" name="password"/>
                </div>
                <div>
                    <button type="submit">Войти</button>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>
