<?php
require_once "../core/config.php";
require_once "../core/lib.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $header = $_POST["header"];
    $content = $_POST["content"];
    if (!savePost($header, $content)) {
        echo "error";
    }
}

