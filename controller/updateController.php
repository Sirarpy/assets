<?php
error_reporting(E_ALL);
include_once "../model/db.php";
include_once "../model/functions.php";

$db = new Db();
$picture = $_FILES['postPicture']['type'];
$substrFileType = $func->testString($picture);
$post = $_POST;


$idPost = $_POST["id"];
$postTitle = $_POST["postTitle"];
$postContent = $_POST["postContent"];
$postPicture =  $idPost . '.' . $substrFileType;


if (!empty($_FILES['postPicture']) && !empty($_FILES['postPicture']['name'])) {
    if (0 < $_FILES['postPicture']['error']) {
        echo 'Error: ' . $_FILES['postPicture']['error'] . '<br>';
    } else {
        move_uploaded_file($_FILES['postPicture']['tmp_name'],
            "../public/images/post/$postPicture");
        $result = "UPDATE `posts`
                            SET title = '$postTitle', 
                            post = '$postContent', 
                            picture = '$postPicture'  
                            WHERE id = '$idPost'";
        $db->query($result);
    }
} else {
    if (!empty($_FILES['postPicture']['error']) && !empty($_FILES['postPicture']['name'])) {
        echo 'error';
    } else {
        $result = "UPDATE posts
                            SET title = '$postTitle', 
                            post = '$postContent'                            
                            WHERE id = '{$idPost}'";
        var_dump($result);
        $db->query($result);
    }
}
return true;
?>