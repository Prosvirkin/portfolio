<?php
function saveWebsite($name, $desc, $reference)
{
    global $link;
    global $fileName;
    global $uploaddir;
    global $uploadfile;
    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
        $sql = "INSERT INTO websites(name, description, reference, image) 
                              VALUES ('$name', '$desc', '$reference', '$fileName')";
        $saveWebsites = mysqli_query($link, $sql);
        if ($saveWebsites) {
            header("location: index.php");
        } else {
            echo "Ошибка";
        }
    }
}

function getWebsites()
{
    global $link;
    $sql = "Select id, name, description, reference, image from websites";
    $getWebsites = mysqli_query($link, $sql);
    $websites = mysqli_fetch_all($getWebsites, MYSQLI_ASSOC);
    return $websites;
}

function deleteFromTable($id)
{
    global $link;
    $sql = "delete from websites where id = '$id'";
    $sqlDelete = mysqli_query($link, $sql);
    header("Location: index.php");
}

function editFromTable($id, $name, $desc, $reference)
{
    global $link;
    global $fileName;
    global $uploaddir;
    global $uploadfile;
    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
        $sql = "update websites set name = '$name', 
                                description = '$desc', 
                                reference = '$reference', 
                                image = '$fileName' 
                                where id like '$id'";
        $sqlEdit = mysqli_query($link, $sql);
        if ($sqlEdit) {
            header("Location: index.php");
        } else {
            echo "Ошибка";
        }
    }
}

function savePost($header, $content)
{
    global $link;
    global $fileName;
    global $uploaddir;
    global $uploadfile;
    global $datetime;
    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
        $sql = "INSERT INTO blog(header, content, image, datetime) 
                              VALUES ('$header', '$content', '$fileName', '$datetime')";
        $savePost = mysqli_query($link, $sql);
        if ($savePost) {
            header("location: index.php");
        } else {
            echo "Ошибка";
        }
    }
}

function getPosts()
{
    global $link;
    $sql = "select id, header, content, image, datetime from blog";
    $getPosts = mysqli_query($link, $sql);
    $posts = mysqli_fetch_all($getPosts, MYSQLI_ASSOC);
    return $posts;
}

function deletePost($id)
{
    global $link;
    $sql = "delete from blog where id = '$id'";
    $deletePost = mysqli_query($link, $sql);
    header("Location: index.php");
}

function editPost($id, $header, $content)
{
    global $link;
    global $fileName;
    global $uploaddir;
    global $uploadfile;
    global $datetime;
    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
        $sql = "update blog set header = '$header', 
                                content = '$content', 
                                image = '$fileName',
                                datetime = '$datetime'
                                where id like '$id'";
        $sqlEdit = mysqli_query($link, $sql);
        if ($sqlEdit) {
            header("Location: index.php");
        } else {
            echo "Ошибка";
        }
    } else {
        echo "Ошибка с файлом";
    }
}

function saveComment($post_id, $name, $content)
{
    global $link;
    global $datetime;

    $sql = "INSERT INTO comments(post_id, name, content, datetime) 
                          VALUES ('$post_id', '$name',  '$content', '$datetime')";
    $saveComment = mysqli_query($link, $sql);

}




















