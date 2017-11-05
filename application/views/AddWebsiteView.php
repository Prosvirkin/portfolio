<section class="admin-form">
    <div class="container">
        <div class="content">
            <h2>Добавить сайт:</h2>
            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']."/admin" ?>">назад</a>
            <form action="" method="post" enctype=multipart/form-data>
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
        </div>
    </div>
</section>
