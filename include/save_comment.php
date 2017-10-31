<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name = "Аноним";
    } else {
        $name = $_POST["name"];
    }
    $content = $_POST["msg"];
    $post_id = $_GET["postid"];
    echo $name . "[".$content."]" . $post_id;
    saveComment($post_id, $name, $content);
    header("Location: index.php");
} else {
    echo "засада";
}
