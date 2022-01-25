<?php

include_once 'databaseConfig.php';

class User {

    private $username;
    private $password;
    public $database;

 

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }
    
    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }



    function register($user) {
        $this->connectToDatabase();
        $sql = "INSERT INTO admins (username, password)"
                . " VALUES ('" . $user->getUsername() . "' , '" . sha1($user->getPassword())  . "')";
        return $this->database->query($sql);
    }

    function login($user) {
        $this->connectToDatabase();
        $sql = "select * from admins where username='" . $user->getUsername() . "' and password='" . $user->getPassword() . "'";
        echo $sql;
        $res = $this->database->query($sql);
        if ($res->num_rows > 0) {
            return true;
        } else {
            return FALSE;
        }
    }

    function connectToDatabase() {
        global $link;
        $this->database = $link;
        return $this->database;
    }

}
