<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author moamenibrahem
 */
class Database {

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "demo";

    public function connectToDB() {
        $link = mysqli_connect($this->server, $this->username, $this->password, $this->dbname);
        if ($link)
            return $link;
        else {
            die("ERROR: Could not connect. " . mysqli_connect_error());

            return false;
        }
    }

}
