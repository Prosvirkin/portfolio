<?php
/* Переменные */

$countWebsites = 0;
$countPosts = 0;
$fileName = $_FILES['uploadfile']['name'];
$uploaddir = '../images/';
$uploadfile = $uploaddir . basename($fileName);
$datetime = time();

/* Подключение к БД */

define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "portfolio");

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno()){
    echo "Ошибка подключение к БД" . mysqli_connect_error();
    exit();
}

/* routing id*/
$id = trim(strip_tags($_GET["id"]));

/* Добавление картинок */
$path = "addImage/";
$tmp_path = "tmp/";
$types = ['image/gif', 'image/png', 'image/jpg'];
$size = 1024000;