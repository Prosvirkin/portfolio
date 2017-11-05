<?php

class blogModel extends Model
{

    function getFullPost($id)
    {
        $post = [];
        $sql = "select header, content, image, datetime from blog where id = $id";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $post[] = $row;
            }
            $result->close();
        }
        return $post;
    }

    function saveComment($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $name = "Аноним";
            } else {
                $name = $_POST["name"];
            }
            $content = $_POST["content"];
            $datetime = time();
            $sql = "insert into comments(post_id, name , content, datetime) values ('$id','$name', '$content', '$datetime')";
            if($this->mysqli->query($sql)){
                $host = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                header("Location:" . $host);
                exit();
            }
        }
    }

    function getComments($id){
        $comments = [];
        $sql = "select name, content, datetime from comments where post_id = $id";
        if($result = $this->mysqli->query($sql)){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $comments[] = $row;
            }
            $result->close();
        }
        return $comments;
    }


}