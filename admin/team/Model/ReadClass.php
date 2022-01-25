<?php

include_once 'Database.php';

class ReadClass {

    private $db;
    private $link;

    public function __construct() {
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function readAll() {

        $sql = "SELECT * FROM admin";
        if ($result = mysqli_query($this->link, $sql)) {
            return $result;
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
            return false;
        }

        mysqli_close($this->link);
        return false;
    }

    public function readOneRecord($id) {
        $sql = "SELECT * FROM volunteer WHERE id = ?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            $param_id = $id;

            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    return $row;
                    
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        mysqli_stmt_close($stmt);

        mysqli_close($this->link);
        return false;
    }

}
