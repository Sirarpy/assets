<?php

class Functions
{
    public function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);
        return $data;
    }
    public function testString($str)
    {
        $str = strrchr($str, "/");
        $strsub = substr($str, 1);
        return $strsub;
    }

    public function dd($array,$die = false)
    {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
        if($die)
        {
            die();
        }
    }
}

$func= new Functions();

/*
class man{

    private $name = 'Narek';

    public function __construct()
    {
        //echo 12;$man->name = '4545';

    }

    public function getName(){
        echo $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

}

$man = new man();
$man->getName();
$man->setName('Sirarpi');
$man->getName();*/