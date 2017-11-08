<section class="admin-form">
    <div class="container">
        <div class="content">
            <h2>Добавить пользователя:</h2>
            <?php if (!empty($data)) {
                echo array_shift($data);
            }?>
            <form action="" method="post">
                <p>Логин:</p>
                <input type="text" name="login" value="<?php echo $_POST["login"]?>"> <br>
                <p>Пароль:</p>
                <input type="password" name="password" >
                <p>Повторите пароль:</p>
                <input type="password" name="password_repeat">
                <input style="margin-top: 20px;" type="submit" value="Добавить">
            </form>
        </div>
    </div>
</section>