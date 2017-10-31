<?php
switch ($id) {
    case "about":
        require_once("include/about.inc.php");
        break;
    case "portfolio":
        require_once("include/portfolio.php");
        break;
    case "blog":
        require_once("include/blog.inc.php");
        break;
    case "contact":
        require_once("include/contact.inc.php");
        break;
    case "fullpost":
        require_once("include/full_post.php");
        break;
    default: require_once ("include/index.inc.php");
}
?>

