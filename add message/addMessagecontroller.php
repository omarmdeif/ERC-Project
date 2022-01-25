<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'Thank for addmessage <br>';
include_once 'messagetemt.php';
$d= new messagetemt();
echo $_POST["Temp"];
$d->message=$_POST["Temp"];
$d->addtoDb();


