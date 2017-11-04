<?php

class blogModel extends Model
{

    function getFullPost($id)
    {
        $post = [];
        $sql = "select header, content, image, datetime from blog where id = $id";
        if ($result = $this->mysqli->query($sql)){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $post[] = $row;
            }
            $result->close();
        }
        return $post;
    }


}