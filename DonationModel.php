<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DonationModel
 *
 * @author Mohamed Alaa
 */
include_once 'Database.php';

class DonationModel {
    //put your code here
    public $cardName, $exdata, $scode, $amount, $cardNumber, $userid1;
    
    private $db;

    public function AddtoDB ($d)
    {
        $sCN=sha1($d->cardNumber); //hash card number
        $seCN=sha1($d->scode); //hash card code
        
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
              
        $sql = "INSERT INTO donationoptionsvalue (PMOpid, value, userid) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($this->link, $sql);
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $PMOpid, $value, $userid);
        
        // Set parameters
        $PMOpid=1; //cardnameid
        $value=$d->cardName;
        $userid=$d->userid1;
        mysqli_stmt_execute($stmt);

        
        $sql2 = "INSERT INTO donationoptionsvalue (PMOpid, value, userid) VALUES (?, ?, ?)";
        $stmt2 = mysqli_prepare($this->link, $sql2);
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt2, "sss", $PMOpid, $value, $userid);
        
        // Set parameters
        $PMOpid=2; //exdata
        $value=$d->exdata;
        $userid=$d->userid1;
        mysqli_stmt_execute($stmt2);
        
        
        $sql3 = "INSERT INTO donationoptionsvalue (PMOpid, value, userid) VALUES (?, ?, ?)";
        $stmt3 = mysqli_prepare($this->link, $sql3);
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt3, "sss", $PMOpid, $value, $userid);
        
        // Set parameters
        $PMOpid=3; //seccode
        $value=$seCN;//after hash
         $userid=$d->userid1;
        mysqli_stmt_execute($stmt3);
        
        $sql4 = "INSERT INTO donationoptionsvalue (PMOpid, value, userid) VALUES (?, ?, ?)";
        $stmt4 = mysqli_prepare($this->link, $sql4);
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt4, "sss", $PMOpid, $value, $userid);
        
        // Set parameters
        $PMOpid=4; //seccode
        $value=$d->amount;//after hash
         $userid=$d->userid1;
        mysqli_stmt_execute($stmt4);
     
        
        $sql5 = "INSERT INTO donationoptionsvalue (PMOpid, value, userid) VALUES (?, ?, ?)";
        $stmt5 = mysqli_prepare($this->link, $sql5);
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt5, "sss", $PMOpid, $value, $userid);
        
        // Set parameters
        $PMOpid=5; //CN
        $value=$sCN;//after hash
        $userid=$d->userid1; //we set the user id letter
        mysqli_stmt_execute($stmt5);
    }   
}