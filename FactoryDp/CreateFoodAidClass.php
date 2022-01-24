<?php

include_once 'Database.php';

class CreateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertRecord($name, $date, $address) {
        $stmt;

$sql = "INSERT INTO missions (DateOfMission, Address, name)
VALUES ('$date, $address, $name)";
   
        if (mysqli_query($this->link, $sql)) {
  echo "New record created successfully";  
  return TRUE;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($this->link);
}
 
mysqli_close($this->link);
        return FALSE;
    }

}
