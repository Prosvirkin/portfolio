<div class="container">
    <section class="feedback content">
        <div class="container">
            <h2>Изменить сайт</h2>
            <form action="" method="post"
                  enctype="multipart/form-data">
                <label>Название:</label>
                <input style="margin-bottom: 15px;" type="text" name="name" required
                       value="<?php echo $arrWebsites[$id - 1]["name"] ?>"> <br>
                <label>Описание:</label> <br>
                <textarea style="margin-bottom: 15px;" type="text"  name="desc" required>
    <?php echo trim($arrWebsites[$id - 1]["description"]); ?>
    </textarea> <br>
                <label>Ссылка:</label> <br>
                <input style="margin-bottom: 15px;" type="text" name="reference" required
                       value="<?php echo $arrWebsites[$id - 1]["reference"] ?>"><br>
                <label>Превью:</label> <br>
                <input style="margin-bottom: 15px;" type="file" name="uploadfile" required><br>
                <input type="submit" value="Изменить">
            </form>
        </div>
    </section>
</div>