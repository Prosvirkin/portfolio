<?php
require_once("secure/secure.php");
require_once("secure/session.php");
?>
<section class="admin-form">
    <h2>Добавить пост:</h2>
    <form action="save_post.php" method="post" enctype=multipart/form-data>
        <label>Заголовок:</label> <br>
        <input style="margin-bottom: 15px;" type="text" name="header" required> <br>
        <label>Описание:</label> <br>
        <textarea style="margin-bottom: 15px;" type="text" name="content" required> </textarea> <br>
        <label>Превью:</label> <br>
        <input style="margin-bottom: 15px;" type="file" name="uploadfile" required> </input> <br>
        <input type="submit" value="Добавить">
    </form>
</section>


</body>
</html>