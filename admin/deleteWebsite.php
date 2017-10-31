<?php
require_once ("../core/lib.php");
require_once ("../core/config.php");

$id = (int)$_GET["id"];

if($id){
    deleteFromTable($id);
}