<?php
error_reporting(E_ALL);

class LogAuthController {

    public function logoutFunc()
    {
        session_destroy();
        header("Location: ../index.php");
    }
}
$auth = new LogAuthController();
$auth->logoutFunc();

?>