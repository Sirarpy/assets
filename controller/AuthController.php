<?php
require '../model/db.php';

error_reporting(E_ALL);

require '../model/functions.php';

class AuthController {

//    ------------------login Controller------------------------

    public function loginFunc($email, $password)
    {
        $db = new Db();
        $result= $db->checkUser($email, $password);
        if (count($result)) {
            session_start();
            $_SESSION['user'] = $result;
            var_dump($_SESSION);
            header("Location:../view/account.php");
        } else {
            header("Location:../index.php?sms=You are not registered");
        }
    }

//    --------------Registration Controller--------------------------

    public function regFunc($firstName, $lastName, $email, $password, $confirm)
    {
        $db = new Db();
        $response = $db->checkReg($firstName, $lastName, $email, $password, $confirm);
        if (!empty($response['success'])) {
            header("Location:../index.php?sms=".$response['message']);
        } else {
            header("Location:../index.php?sms=".$response['message']);
        }
    }
}

//---------------------login-----------------------

$auth = new AuthController();

if ($_POST['submit'] == 'logIn'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $auth->loginFunc($email, $password);

}

//-------------------registration--------------------

if ($_POST['submit'] == 'regIn'){
    $firstName = $func->test($_POST['fName']);
    $lastName = $func->test($_POST['lName']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $auth->regFunc($firstName,$lastName,$email,$password,$confirm);
}

?>