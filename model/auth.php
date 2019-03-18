<?php

session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    header("Location:../view/account.php");
}else{
    header("Location:../index.php");
    die();
}

//$func->dd($user);
