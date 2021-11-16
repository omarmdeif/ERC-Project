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
        $sql = "INSERT INTO missions (name, date, address) VALUES (?, ?, ?)";
        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_date, $param_address);

            $param_name = $name;
            $param_date = $date;
            $param_address = $address;

            if (mysqli_stmt_execute($stmt)) {
                return true;
            } else {
                return false;
            }
        }
        echo 'outside if';

        mysqli_stmt_close($stmt);
        mysqli_close($this->link);
        return false;
    }

}
