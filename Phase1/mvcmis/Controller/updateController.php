<?php


$name = $date = $address  = "";
$name_err = $date_err = $address_err =  "";

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
        include_once '../Model/updateClass.php';
        $updator = new updateClass();
        if ($updator->update($name, $date, $address, $id)) {
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
            $date = $row["date"];
            $address = $row["address"];
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
