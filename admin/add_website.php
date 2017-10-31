<?php
require_once("secure/secure.php");
require_once("secure/session.php");
?>
<section class="admin-form">
    <h2>Добавить сайт:</h2>
    <form action="save_website.php" method="post" enctype=multipart/form-data>
        <label>Название:</label> <br>
        <input style="margin-bottom: 15px;" type="text" name="name" required> <br>
        <label>Описание:</label> <br>
        <textarea style="margin-bottom: 15px;" type="text" name="desc" required> </textarea> <br>
        <label>Ссылка:</label> <br>
        <input style="margin-bottom: 15px;" type="text" name="reference" required> </input> <br>
        <label>Превью:</label> <br>
        <input style="margin-bottom: 15px;" type="file" name="uploadfile" required> </input> <br>
        <input type="submit" value="Добавить">
    </form>
</section>


</body>
</html>