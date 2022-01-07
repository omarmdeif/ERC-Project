<?php
$name = $date  = $address  = "";
$name_err = $date_err  = $address_err  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    $input_date = trim($_POST["date"]);
    if (empty($input_date)) {
        $date_err = "Please enter an date.";
    } else {
        $date = $input_date;
    }

    $input_address = trim($_POST["address"]);
    if (empty($input_address)) {
        $address_err = "Please enter an address.";
    } else {
        $address = $input_address;
    }


    if (empty($name_err) && empty($date_err) && empty($address_err)) {
        include_once '../Model/CreateClass.php';
        $creator = new CreateClass();
        if ($creator->insertRecord($name, $date, $address)) {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

}
?>