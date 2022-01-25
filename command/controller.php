<?php


$name = $email = $pNumber = $hours = $address = $compensation = $missionID = "";
$name_err = $email_err = $pNumber_err = $hours_err = $address_err = $compensation_err= $missionID = "";

if (isset($_POST["id"]) && !empty($_POST["id"])){
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

    $input_email= trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter an email.";
    } else {
        $email = $input_email;
    }

    $input_pNumber= trim($_POST["pNumber"]);
    if (empty($input_pNumber)) {
        $pNumber_err = "Please enter an pNumber.";
    } else {
        $pNumber = $input_pNumber;
    }

    $input_hours= trim($_POST["hours"]);
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

    $input_compensation= trim($_POST["compensation"]);
    if (empty($input_compensation)) {
        $compensation_err = "Please enter an compensation.";
    } else {
        $compensation = $input_compensation;
    }
    $input_missionID= trim($_POST["missionID"]);
    if (empty($input_missionID)) {
        $missionID_err = "Please enter an missionID.";
    } else {
        $missionID = $input_missionID;
    }

    if (empty($name_err) && empty($email_err) && empty($pNumber_err) && empty($hours_err) && empty($address_err)  && empty($compensation_err) && empty($missionID_err)) {
        include_once 'commandFile.php';
        $updator = new updateClass("volunteers");
        if ($updator->update($name, $email, $pNumber, $hours, $address, $compensation, $missionID, $id)) {
            header("location: /index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
} 
//else {
//
//    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
//        $id = trim($_GET["id"]);
//        include_once '../Model/ReadClass.php';
//        $reader = new ReadClass("volunteers");
//        if ($row = $reader->readOneRecord($id)) {
//            $name = $row["name"];
//            $email = $row["email"];
//            $pNumber = $row["pNumber"];
//            $hours = $row["hours"];
//            $address = $row["address"];
//            $compensation = $row["compensation"];
//        }
//        else {
//            echo "Something went wrong. Please try again later.";
//
//        }
//    } else {
//        header("location: error.php");
//        exit();
//    }
//}
?>
