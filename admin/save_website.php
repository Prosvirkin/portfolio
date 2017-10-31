<?php
require_once "../core/config.php";
require_once "../core/lib.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $reference = $_POST["reference"];
    saveWebsite($name, $desc, $reference);
}
