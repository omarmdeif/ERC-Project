<?php

include_once 'Database.php';

class DeleteClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function delete($id) {
        $sql = "DELETE FROM volunteer WHERE id = ?";
        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            $param_id = trim($_POST["id"]);

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
