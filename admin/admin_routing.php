<?php
    switch($id){
        case "add_website":
            require_once ("add_website.php");
            break;
        case "add_post":
            require_once ("add_post.php");
            break;
        case "create_user":
            require_once ("../admin/secure/create_user.php");
            break;
        default:
            require_once ("../admin/admin_content.php");
    }