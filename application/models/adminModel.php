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
        $sql = "delete from blog where id = '$id'";
        if ($this->mysqli->query($sql)) {
            $host = "http://{$_SERVER['HTTP_HOST']}/admin";
            header("Location:" . $host);
            exit();
        }
    }

}