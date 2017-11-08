<?php

class adminModel extends Model
{
    // Манипуляции с сайтами
    function saveWebsite()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fileName = $_FILES['uploadfile']['name'];
            $uploaddir = 'images/';
            $uploadfile = $uploaddir . basename($fileName);
            $name = $_POST["name"];
            $desc = $_POST["desc"];
            $reference = $_POST["reference"];
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
                $sql = "INSERT INTO websites(name, description, reference, image) 
                              VALUES ('$name', '$desc', '$reference', '$fileName')";
                if ($this->mysqli->query($sql)) {
                    $host = "http://{$_SERVER['HTTP_HOST']}/admin";
                    header("Location:" . $host);
                    exit();
                } else {
                    echo "Ошибка";
                }
            }
        }
    }

    function editWebsite($id)
    {
        $this->emptyId($id);
        $fileName = $_FILES['uploadfile']['name'];
        $uploaddir = 'images/';
        $uploadfile = $uploaddir . basename($fileName);
        $name = $_POST["name"];
        $desc = $_POST["desc"];
        $reference = $_POST["reference"];
        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
            $sql = "update websites set name = '$name', 
                                description = '$desc', 
                                reference = '$reference', 
                                image = '$fileName' 
                                where id like '$id'";
            if ($this->mysqli->query($sql)) {
                $host = "http://{$_SERVER['HTTP_HOST']}/admin";
                header("Location:" . $host);
                exit();
            } else {
                echo "Ошибка";
            }
        }
    }

    function deleteWebsite($id)
    {
        $this->emptyId($id);
        $sql = "delete from websites where id = '$id'";
        if ($this->mysqli->query($sql)) {
            $host = "http://{$_SERVER['HTTP_HOST']}/admin";
            header("Location:" . $host);
            exit();
        }
    }

    // Манипуляции с блогом
    function savePost()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fileName = $_FILES['uploadfile']['name'];
            $uploaddir = 'images/';
            $uploadfile = $uploaddir . basename($fileName);
            $header = $_POST["header"];
            $content = $_POST["content"];
            $datetime = time();
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
                $sql = "INSERT INTO blog(header, content, image, datetime) 
                              VALUES ('$header', '$content', '$fileName', '$datetime')";
                if ($this->mysqli->query($sql)) {
                    $host = "http://{$_SERVER['HTTP_HOST']}/admin";
                    header("Location:" . $host);
                    exit();
                } else {
                    echo "Ошибка";
                }
            }
        }
    }

    function editPost($id)
    {
        $this->emptyId($id);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fileName = $_FILES['uploadfile']['name'];
            $uploaddir = 'images/';
            $uploadfile = $uploaddir . basename($fileName);
            $header = $_POST["header"];
            $content = $_POST["content"];
            $datetime = time();
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
                $sql = "update blog set header = '$header', 
                                content = '$content', 
                                image = '$fileName',
                                datetime = '$datetime'
                                where id like '$id'";
                if ($this->mysqli->query($sql)) {
                    $host = "http://{$_SERVER['HTTP_HOST']}/admin";
                    header("Location:" . $host);
                    exit();
                } else {
                    echo "Ошибка";
                }
            }
        }
    }

    function deletePost($id)
    {
        $this->emptyId($id);
        $sql = "delete from blog where id = '$id'";
        if ($this->mysqli->query($sql)) {
            $host = "http://{$_SERVER['HTTP_HOST']}/admin";
            header("Location:" . $host);
            exit();
        }
    }

    function signup()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["login"])) {
                $errors[] = "Введите логин";
            }

            if (empty($_POST["password"])) {
                $errors[] = "Введите пароль";
            }

            if (empty($_POST["password_repeat"])) {
                $errors[] = "Повторите пароль";
            }

            if ($_POST["password"] != $_POST["password_repeat"]) {
                $errors[] = "Пароли не совпадают";
            }

            $sql = "select login from users";
            $result = $this->mysqli->query($sql);
            $logins = $result->fetch_array(MYSQLI_ASSOC);

            if ($logins["login"] == $_POST["login"]) {
                $errors[] = "Такой логин уже существует";
            }

            if (empty($errors)) {
                $login = trim($_POST["login"]);
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                $sql = "insert into users(login, password) values('$login', '$password')";
                if ($this->mysqli->query($sql)) {
                    header("Location: http://" . $_SERVER["HTTP_HOST"] . "/admin");
                } else {
                    echo "Ошибка";
                }
            } else {
                return $errors;
            }
        }
    }

    function login()
    {
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["login"])) {
                $errors[] = "Введите логин";
            } else {
                $login = $_POST["login"];
            }

            if (empty($_POST["password"])) {
                $errors[] = "Введите пароль";
            } else {
                $password = $_POST["password"];
            }

            $sql = "select login, password from users where login = '$login' ";
            $result = $this->mysqli->query($sql);
            $row = $result->fetch_array(MYSQLI_ASSOC);

            if ($row["login"] != $login) {
                $errors[] = "Введеный логин или пароль неверный";
            }

            if (!password_verify($password, $row["password"])) {
                $errors[] = "Введеный логин или пароль неверный";
            }

            if ($row["login"] = $login && password_verify($password, $row["password"])) {
                $_SESSION["login"] = $login;
                header("Location: http://" .$_SERVER["HTTP_HOST"]."/admin");
            }

            if (!empty($errors)) {
                return $errors;
            }
        }
    }

    function session()
    {
        session_start();
        if (!isset($_SESSION["login"])) {
            header("Location: http://" . $_SERVER["HTTP_HOST"] . "/admin/login");
        }
    }

    function logout()
    {
        session_start();
        unset($_SESSION["login"]);
        header("Location: http://" . $_SERVER["HTTP_HOST"] . "/admin/login");
        exit;
    }

}


