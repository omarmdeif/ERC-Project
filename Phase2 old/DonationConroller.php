<?php

echo 'Thank for donation <br>';
echo  $_POST["CardName"];
include_once 'DonationModel.php';
$d= new DonationModel();
$d->cardName=$_POST["CardName"];
$d->amount=$_POST["Amount"];
$d->userid1=0;
$d->cardName=$_POST["CardNumber"];
$d->exdata=$_POST["ExpieyData"];
$d->scode=$_POST["scode"];
$d->AddtoDB($d);



?>
