<?php

include_once "../model/db.php";
include_once "../model/functions.php";

session_start();
$user_id = $_SESSION['user'][0][0];
$postTitle = $func->test($_POST['postTitle']);
$postContent = $func->test($_POST['postContent']);
$postPicture = time() . "." . $func->testString($_FILES['postPicture']['type']);

$db = new Db();

if (isset($_FILES) && !empty($_FILES)) {
    if (0 < $_FILES['postPicture']['error']) {
        echo 'Error: ' . $_FILES['postPicture']['error'] . '<br>';
    } else {
        move_uploaded_file($_FILES['postPicture']['tmp_name'], "../public/images/post/$postPicture");
        $sql = "INSERT INTO posts (`title`, `post`, `picture`,`user_id`)  
                VALUES  ('$postTitle', '$postContent', '$postPicture',{$user_id})";
        $db->query($sql);
    }
}

return true;

?>