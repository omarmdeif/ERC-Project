
<?php

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    $id == $_POST["id"];
    include_once '../Model/DeleteClass.php';
    $delete = new DeleteClass();
    if ($delete->delete($id)) {
        header("location: ../index.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    if (empty(trim($_GET["id"]))) {
        header("location: error.php");
        exit();
    }
}
?>
