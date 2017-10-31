<?php
require_once("../core/lib.php");
require_once("../core/config.php");
require_once("secure/secure.php");
require_once("secure/session.php");

if (isset($_GET['logout'])) {
    logOut();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap-grid-3.3.1.min.css"/>
    <link rel="stylesheet" href="../libs/font-awesome-4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/fonts.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/media.css"/>
    <title>Admin Panel</title>
</head>
<body>


<div class="container">
    <div class="admin-menu">
        <ul>
            <li> <a href="index.php">Контент</a></li>
            <li> <a href="index.php?id=add_website">Добавить сайт</a></li>
            <li> <a href="index.php?id=add_post">Добавить пост</a></li>
            <li><a href="index.php?id=create_user">Добавить пользователя</a></li>
            <li> <a href="../index.php">Вернуться на сайт</a></li>
            <li><a href="index.php?logout">Выйти</a></li>
        </ul>
    </div>

    <div>
        <?php require_once("admin_routing.php"); ?>
    </div>
</div>


</table>
</body>
</html>