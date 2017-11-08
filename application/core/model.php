<?php

class Model
{
    protected $mysqli;

    function __construct()
    {
        $this->mysqli = new mysqli("localhost", "root", "", "portfolio");
        $this->mysqli->query("SET NAMES utf8;");

        if ($this->mysqli->connect_errno) {
            echo "Не удалось подключиться к БД:\n" . $this->mysqli->connect_error;
            exit();
        }
    }

    protected function emptyId($id)
    {
        if (empty($id)) {
            Route::ErrorPage404();
        }
    }

    public function getWebsites()
    {
        $websites = [];
        $sql = "select id, name, description, reference, image from websites";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $websites[] = $row;
            }
            $result->close();
        }
        return $websites;
    }

    function getPosts()
    {
        $posts = [];
        $sql = "select id, header, content, image, datetime from blog";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $posts[] = $row;
            }
            $result->close();
        }
        return $posts;
    }
}