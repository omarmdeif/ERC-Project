<?php
$name = $email = $phonenumber = $hours = $address = $compensation = $missionid = "";
$name_err = $email_err = $phonenumber_err = $hours_err = $address_err = $compensation_err = $missionid_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $phonenumber_err = "Please enter the Phone Number.";
    } elseif (!ctype_digit($input_phonenumber)) {
        $phonenumber_err = "Please enter a positive integer value.";
    } else {
        $phonenumber = $input_phonenumber;
    }

    $input_hours = trim($_POST["hours"]);
    if (empty($input_hours)) {
        $hours_err = "Please enter the Hours.";
    } elseif (!ctype_digit($input_hours)) {
        $hours_err = "Please enter a positive integer value.";
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
        include_once '../Model/CreateClass.php';
        $creator = new CreateClass();
        if ($creator->insertRecord($name, $email, $phonenumber, $hours, $address, $compensation, $missionid)) {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

}
?>