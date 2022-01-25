<?php

include_once 'Database.php';

class CreateClass {

    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function editRecord($bt, $stock) {
        $sql = "UPDATE bloodstock SET stock=? WHERE bloodtype=?";
        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $param_stock, $param_bt);
            
            $param_stock = $stock;
            $param_bt = $bt;

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
$dbb = new CreateClass();
$dbb->editRecord("A", 39);
?>