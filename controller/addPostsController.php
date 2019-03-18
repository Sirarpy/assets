<?php

include_once "../model/db.php";
include_once "../model/functions.php";
//session_start();
////
//var_dump($_POST);
//die();


//var_dump($_SESSION['user'][0][0]);
//die();

//?????????????????????????????
$user_id = $_SESSION['user'][0][0][0];
$postTitle = $func->test($_POST['postTitle']);

//var_dump($_SESSION['user'][0][0][0]);
//var_dump($postTitle);


$postContent = $func->test($_POST['postContent']);
$postPicture = time() . "." . $func->testString($_FILES['postPicture']['type']);

//var_dump($postPicture);
//var_dump($_FILES['postPicture']['tmp_name']);
//die();
//var_dump($user_id);
//var_dump($_FILES);
//die();

$db = new Db();

if (isset($_FILES) && !empty($_FILES)) {
    if (0 < $_FILES['postPicture']['error']) {
        echo 'Error: ' . $_FILES['postPicture']['error'] . '<br>';
    } else {
        move_uploaded_file($_FILES['postPicture']['tmp_name'], "../public/images/post/$postPicture");
        $db->query("INSERT INTO posts (`title`, `post`, `picture`,`user_id`)  VALUES  ('$postTitle', '$postContent', '$postPicture','$user_id')");
    }
}
//var_dump($addArticle);
//var_dump($addArticle);
//die();

header("Location:../view/account.php");

return true;

?>