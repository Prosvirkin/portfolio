<section class="feedback content">
    <div class="container">
        <h2>Изменить пост</h2>
        <form style="margin-top: 40px;" action="<?php $_SERVER["PHP_SELF"] ?>" method="post"
              enctype="multipart/form-data">
            <label>Название:</label>
            <input style="margin-bottom: 15px;" type="text" name="header" required
                   value="<?php echo $arrPosts[$id - 1]["header"] ?>"> <br>
            <label>Описание:</label> <br>
            <textarea style="margin-bottom: 15px;" type="text" name="content"
                      required><?php echo $arrPosts[$id - 1]["content"]; ?>
                </textarea> <br>
            <label>Превью:</label> <br>
            <input style="margin-bottom: 15px;" type="file" name="uploadfile" required><br>
            <input type="submit" value="Изменить">
        </form>
    </div>
</section>