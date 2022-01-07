<?php

$name = $email = $phonenumber = $hours = $address = $compensation = $missionid =  "";
$name_err = $email_err = $phonenumber_err = $hours_err = $address_err = $compensation_err = $missionid_err = "";

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    echo 'post';

    $id = $_POST["id"];

    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter an email.";
    } else {
        $email = $input_email;
    }

    $input_phonenumber = trim($_POST["phonenumber"]);
    if (empty($input_phonenumber)) {
        $phonenumber_err = "Please enter an Phone Number.";
    } else {
        $phonenumber = $input_phonenumber;
    }

    $input_hours = trim($_POST["hours"]);
    if (empty($input_hours)) {
        $hours_err = "Please enter an hours.";
    } else {
        $hours = $input_hours;
    }

    $input_address = trim($_POST["address"]);
    if (empty($input_address)) {
        $address_err = "Please enter an address.";
    } else {
        $address = $input_address;
    }

    $input_compensation = trim($_POST["compensation"]);
    if (empty($input_compensation)) {
        $compensation_err = "Please enter the compensation amount.";
    } elseif (!ctype_digit($input_compensation)) {
        $compensation_err = "Please enter a positive integer value.";
    } else {
        $compensation = $input_compensation;
    }

    $input_missionid = trim($_POST["missionid"]);
    if (empty($input_missionid)) {
        $missionid_err = "Please enter an missionid.";
    } else {
        $missionid = $input_missionid;
    }

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
            $email = $row["email"];
            $phonenumber = $row["phonenumber"];
            $hours = $row["hours"];
            $address = $row["address"];
            $compensation = $row["compensation"];
            $missionid = $row["missionid"];
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
