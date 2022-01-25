<?php

include_once 'Database.php';

class CreateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertRecord($name, $pwd,$acess) {
        $pwd = sha1($pwd);
        $sql = "INSERT INTO admin (name, pwd,acesslevel,) VALUES ('$name','$pwd' , '$acess')";
       
        echo 'outside if';

        mysqli_stmt_close($stmt);
        mysqli_close($this->link);
        return false;
    }

}
