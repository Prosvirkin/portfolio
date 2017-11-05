<div class="container">
    <div class="content">
        <section class="admin-form">
            <h2>Добавить пост:</h2>
            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']."/admin" ?>">назад</a>
            <form action="" method="post" enctype=multipart/form-data>
                <label>Заголовок:</label> <br>
                <input style="margin-bottom: 15px;" type="text" name="header" required> <br>
                <label>Описание:</label> <br>
                <textarea style="margin-bottom: 15px;" type="text" name="content" required> </textarea> <br>
                <label>Превью:</label> <br>
                <input style="margin-bottom: 15px;" type="file" name="uploadfile" required> </input> <br>
                <input type="submit" value="Добавить">
            </form>
        </section>
    </div>
</div>