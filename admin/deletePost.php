<?php
require_once "../core/lib.php";
require_once "../core/config.php";

$id = $_GET["id"];

if($id){
    deletePost($id);
}
