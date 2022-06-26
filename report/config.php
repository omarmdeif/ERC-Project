<?php
   
   $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "oop";

        $link = mysqli_connect($server, $username, $password, $dbname);
        if ($link){
        return $link;}
        else {
            die("ERROR: Could not connect. " . mysqli_connect_error());

            return false;
        }
?>