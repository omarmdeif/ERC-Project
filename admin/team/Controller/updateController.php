<?php

$name = $email = $phonenumber = $hours = $address = $compensation = $missionid =  "";
$name_err = $email_err = $phonenumber_err = $hours_err = $address_err = $compensation_err = $missionid_err = "";

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    echo 'post';

    $id = $_POST["id"];
        $pwd = $_POST["pwd"];
            $accesslevel = $_POST["accesslevel"];

   

    if (empty($name_err) && empty($email_err) && empty($phonenumber_err) && empty($hours_err) && empty($address_err) && empty($compensation_err) && empty($missionid_err)) {
        include_once '../Model/updateClass.php';
        $updator = new updateClass();
        if ($updator->update($name, $email, $phonenumber, $hours, $address, $compensation, $missionid, $id)) {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
} else {

    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        include_once '../Model/ReadClass.php';
        $reader = new ReadClass();
        if ($row = $reader->readOneRecord($id)) {
            $name = $row["name"];
            $pwd = $row["pwd"];
            $access = $row["accesslevel"];
       
        }
        else {
                    echo "Something went wrong. Please try again later.";

        }
    } else {
        header("location: error.php");
        exit();
    }
}
?>
