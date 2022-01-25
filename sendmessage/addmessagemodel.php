<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addmessagemodel
 *
 * @author Mohamed Alaa
 */
include_once 'Database.php';
class addmessagemodel {
    //put your code here
    public function addtoDb($id, $meid)
    {
        echo 'hello';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
        
         $sql = "INSERT INTO messageuser (messageid, userid) VALUES (?, ?)";
        $stmt = mysqli_prepare($this->link, $sql);
         // Bind variables to the prepared statement as parameters

        mysqli_stmt_bind_param($stmt, "ii", $mid, $uid);
        
        // Set parameters
        
        $mid= $meid;
        $uid= $id;
        mysqli_stmt_execute($stmt);
        
    }
   
    

    
}
