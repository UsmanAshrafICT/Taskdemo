<?php
class DB{
    public $server;
    public $user;
    public $password;
    public $database;
    function __construct($server,$user,$password,$database){
        $this->server=$server;
        $this->user=$user;
        $this->password=$password;
        $this->database=$database;
    }
    function get_server(){
    return    $this->server;
    }
    function get_user(){
        return $this->user;
    }
    function get_password(){
        return $this->password;
    }
    function get_database(){
        return $this->database;
    }
}
$pakistan=new DB("localhost","root","","pakistan");
$pakistan->mysqli_connect();
class User{

}
?>