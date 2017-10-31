<?php
$id = $_GET["postid"] - 1;
$posts = getPosts();

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

?>
<div class="container">
    <div class="blog-content_item">
        <div class="blog-content_img">
            <a href=""><img src="<?php echo " ../images/" . $posts[$id]['image'] ?>" alt=""></a>
        </div>
        <p style="text-align: left;"><?php echo $posts[$id]["header"]; ?></p>
        <p style="text-align: left;"><?php echo date("d-m-Y", $posts[$id]["datetime"]); ?></p>
        <p><?php echo $posts[$id]["content"] ?></p>
    </div>

    <form action="<?php echo $_SERVER["REQUEST_URI"]?>" method="post">
        <label>Имя:</label> <br>
        <input style="margin-bottom: 15px;" type="text" name="name"> <br>
        <label>Описание:</label> <br>
        <textarea  type="text" name="msg" required> </textarea> <br>
        <input type="submit" value="Добавить">
    </form>
</div>
<?php require_once("footer.inc.php") ?>
