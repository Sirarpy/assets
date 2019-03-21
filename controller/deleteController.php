<?php
include_once "../model/db.php";

$db = new Db();
$article_id = $_POST['id'];

$result = "DELETE FROM posts WHERE id = '$article_id'";
$db->query($result);


