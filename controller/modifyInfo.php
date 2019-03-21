<?php
include_once "../model/db.php";
include_once "../model/functions.php";
session_start();

    $db = new Db();
    $fileType = $_FILES['picture']['type'];

    $pictureType = $func->testString($fileType);

    $post = $_POST;
    $idOfUser = $post['id'];
    $userName = $func->test($post['fName']);
    $userSurname = $func->test($post['lName']);
    $userPassword = $post['password'];
    $userPicture = $idOfUser . '.' . $pictureType;

    $db = new Db();

    if (!empty(trim($userPassword))) {
        $update = $db->query(
            "UPDATE users
                      SET firstName = '{$userName}', 
                      lastName = '{$userSurname}', 
                      password = '{$userPassword}'
                      WHERE id = '{$idOfUser}'"
        );
    } else {
        $sql= "UPDATE users
                      SET firstName = '{$userName}', 
                      lastName = '{$userSurname}' 
                      WHERE id = '{$idOfUser}'";
        $update = $db->query($sql);
    }

    if (!empty($_FILES['picture']) && !empty($_FILES['picture']['name'])) {
        if (0 < $_FILES['picture']['error']) {
            echo 'Error: ' . $_FILES['picture']['error'] . '<br>';
        } else {

            move_uploaded_file($_FILES['picture']['tmp_name'], "../public/images/user/$userPicture");

            $update = $db->query(
                "UPDATE users
                          SET picture = '{$userPicture}'
                          WHERE id = '{$idOfUser}'"
            );
            $_SESSION['user'][0][3] = $userPicture;
        }
    }


$_SESSION['user'][0][1] = $userName;
    $_SESSION['user'][0][2] = $userSurname;
    if($userPassword != ''){
        $_SESSION['user'][0][5] = $userPassword;
    }

return true;
?>
