<?php
require_once("session.php");
require_once("secure.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    if (!userExists($login)) {
        $password = $_POST['password'];
        $hash = getHash($password);
        if (saveUser($login, $hash)) {
            $result = 'Хеш ' . $hash . ' успешно добавлен в файл';
            header("Location: ../index.php");
        } else {
            $result = 'При записи хеша ' . $hash . ' произошла ошибка';
        }

    } else {
        $result = "Пользователь $login уже существует. Выберите другое имя.";
    }
}
?>

<section class="admin-form">
    <h2>Добавить пользователя:</h2>
    <h3><?= $result ?></h3>
    <form style="margin-top: 40px;" action="<?php $_SERVER["REQUEST_METHOD"] ?>" method="post">
        <label>Имя:</label> <br>
        <input style="margin-bottom: 15px;" type="text" name="login""> <br>
        <label>Логин:</label> <br>
        <input style="margin-bottom: 15px;" type="password" name="password">
        <input type="submit" value="Добавить">
    </form>
</section>


</body>
</html