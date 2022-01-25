<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of messagetemt
 *
 * @author Mohamed Alaa
 */
include_once 'Database.php';

class messagetemt {
    //put your code here
    public $message="", $mID;
    
    public function addtoDb()
    {
         $this->db = new Database();
        $this->link = $this->db->connectToDB();
        
         $sql = "INSERT INTO messages (messagetemp) VALUES (?)";
        $stmt = mysqli_prepare($this->link, $sql);
         // Bind variables to the prepared statement as parameters

        mysqli_stmt_bind_param($stmt, "s", $m);
        
        // Set parameters
        
        $m= $this->message;
        mysqli_stmt_execute($stmt);
        
    }
    
}
    

