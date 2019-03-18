<?php
include_once "../model/db.php";
include_once "../model/functions.php";
//include_once "../model/auth.php";
//session_start();
$db = new Db();
//var_dump($_POST['fName']);
//var_dump($func->test($_POST['fName']));
//die();
$fileType = $_FILES['picture']['type'];

//var_dump($fileType); // image/png
//die();
$pictureType = $func->testString($fileType);


$post = $_POST;
$idOfUser = $post['id'];                               //OK
$userName = $func->test($post['fName']);               //OK
$userSurname = $func->test($post['lName']);            //OK
$userPassword = $post['password'];                     //OK
$userPicture = $idOfUser . '.' . $pictureType;         //Ok

$db = new Db();

//var_dump($user);
//die();

if (!empty($_FILES['picture']) && !empty($_FILES['picture']['name'])) {
    if (0 < $_FILES['picture']['error']) {
        echo 'Error: ' . $_FILES['picture']['error'] . '<br>';
    } else {

        move_uploaded_file($_FILES['picture']['tmp_name'], "../public/images/user/$userPicture");

        if(!empty($userPassword) && $userPassword !=''){
            $update = $db->query(
                "UPDATE `users`
                          SET firstName = '$userName', 
                          lastName = '$userSurname', 
                          picture = '$userPicture', 
                          password = '$userPassword'
                          WHERE id = '$idOfUser'"
            );
        }else{
            $update = $db->query(
                "UPDATE `users`
                          SET firstName = '$userName', 
                          lastName = '$userSurname', 
                          picture = '$userPicture'
                          WHERE id = '$idOfUser'"
            );
        }
        $_SESSION['user'][0]['picture'] = $userPicture;
    }
}
else {
    if (!empty($_FILES['picture']['error']) && !empty($_FILES['picture']['name'])) {
        echo 'error';
    }
     else {
        if (!empty($userPassword) && $userPassword != '') {
            $update = $db->query(
                "UPDATE `users`
                          SET firstName = '$userName', 
                          lastName = '$userSurname', 
                          password = '$userPassword'
                          WHERE id = '$idOfUser'"
            );

            $_SESSION['user'][0]['password'] = $userPassword;

        } else {
            $update = $db->query(
                "UPDATE `users`
                          SET firstName = '$userName', 
                          lastName = '$userSurname', 
                          WHERE id = '$idOfUser'"
            );
        }
    };
}



$_SESSION['user'][0]['firstName'] = $userName;
$_SESSION['user'][0]['lastName'] = $userSurname;

//var_dump($_SESSION);
//die();
return true;
?>
