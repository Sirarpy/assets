<?php
include_once "../model/db.php";

    session_start();
    $userId = $_SESSION['user'][0][0];
    $db = new Db();

    $limitShow = 5;
    $result = "SELECT COUNT(id) 
               FROM posts 
               where user_id = '".$userId."'";

    $totalResult = $db->connectQuery($result);
    $row = mysqli_fetch_row($totalResult);
    $totalPosts = $row[0];

    $totalPages = ceil($totalPosts / $limitShow);

    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    };

    $startFrom = ($page - 1) * $limitShow;
    $result = "SELECT * FROM posts where user_id = '".$userId."' LIMIT ".$startFrom.",".$limitShow;
    $showResult = $db->query($result);

?>