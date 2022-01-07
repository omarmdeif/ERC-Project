<?php
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
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    header("location: error.php");
    exit();
}
?>