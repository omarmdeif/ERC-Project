<?php

include_once 'Database.php';

class CreateClass {

    private $db;
  public $link;
  public $sql;
    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertRecord($name, $pwd,$acess) {
        $pwd = sha1($pwd);
        $this->sql = "INSERT INTO admin (name,pwd,accesslevel) VALUES ('$name','$pwd' , $acess)";
       
    if (mysqli_query($this->link, $this->sql)) {
  echo "New record created successfully";  
  return TRUE;
} else {
     echo "Error: " . $this->sql . "<br>" . mysqli_error($this->link);
 
}
 
mysqli_close($this->link);
        return FALSE;
    }

}
