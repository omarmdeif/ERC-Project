<?php

include_once 'Database.php';

class updateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function update($name, $date, $address, $id) {
        $sql = "UPDATE missions SET name=?, date=?, address=? WHERE id=?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_date, $param_address, $param_id);

            
            $param_name = $name;
            $param_date = $date;
            $param_address = $address;
            $param_id = $id;

            if (mysqli_stmt_execute($stmt)) {
                
                return true;
            } else {
                return false;
            }
        }

        mysqli_stmt_close($stmt);

        
        mysqli_close($link);
        return false;
    }

}
