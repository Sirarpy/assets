<?php

class Db
{
    private $server = "localhost";
    private $user = "root";
    private $pass = "root";
    private $base = "sys";
    protected $db;

//    -------------------------connenct function ------------------------------------
    function __construct()
    {
        $this->db = mysqli_connect($this->server, $this->user, $this->pass, $this->base);
    }

//    -------------------------query function ------------------------------------
    public function query($sql)
    {
        $res = mysqli_query($this->db, $sql);
        if (!$res) {
            die(mysqli_error($this->db));
        }
        return mysqli_fetch_all($res);
    }

//    -------------------------registration function ------------------------------------
    public function checkReg($firstName, $lastName, $email, $password, $confirm)
    {
        if (strlen($password) <= 3) {
            return [
                'success' => false,
                'message' => 'Password must include more than 6 symbols'
            ];
        }
        if ($password !== $confirm) {
            return [
                'success' => false,
                'message' => 'Passwords do not match'
            ];
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [
                'success' => false,
                'message' => 'Email is not correct'
            ];
        }

        $select = $this->query("SELECT * FROM users WHERE `email` = '$email'");

        if (count($select) > 0) {
            return [
                'success' => false,
                'message' => 'Email already exists'
            ];
        }
        if (strlen($firstName) == "" || strlen($lastName) == "" || strlen($email) == ""
            || strlen($password) == "" || strlen($confirm) == "") {
            return [
                'success' => false,
                'message' => 'All areas must be filled'
            ];
        }
       $this->query("INSERT INTO users (`firstName`, `lastName`, `picture`, `email`, `password`) 
                              VALUES  ('$firstName', '$lastName', '3.png', '$email', '$password')");
        return [
            'success' => true,
            'message' => 'You registered successfully, please log in' //???????????
        ];
    }

//    ---------------------- login function -------------------------------------

    public function checkUser($email, $password)
    {
       return $this->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    }
}