<?php
include_once 'addmessagemodel.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$d= new addmessagemodel();
echo $_POST["m"];
//$d->messageid=$_POST["m"];
$d->addtoDb($_POST["u"], $_POST["m"]);


