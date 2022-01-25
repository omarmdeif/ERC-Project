<?php

include_once 'Database.php';

class EditinDb {

    private $db;
    public $eh;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

}
