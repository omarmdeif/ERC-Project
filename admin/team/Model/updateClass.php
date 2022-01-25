<?php

include_once 'Database.php';

class updateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function update($name, $email, $phonenumber, $hours, $address, $compensation, $missionid, $id) {
        $sql = "UPDATE volunteer SET name=?, email=?, phonenumber=?, hours=?, address=?, compensation=?, missionid=? WHERE id=?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssddsddi", $param_name, $param_email, $param_phonenumber, $param_hours, $param_address, $param_compensation, $param_missionid, $param_id);

            $param_name = $name;
            $param_email = $email;
            $param_phonenumber = $phonenumber;
            $param_hours = $hours;
            $param_address = $address;
            $param_compensation = $compensation;
            $param_missionid = $missionid;
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
