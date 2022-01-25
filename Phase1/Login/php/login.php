<?php

if ($_POST) {
    if (isset($_POST['login']) && $_POST['login'] == "Login") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        include_once 'databaseConfig.php';
        global $link;
        $conn = $link;
        $sql = "select * from admins where username='" . $username . "' and password='" . sha1($password). "'";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            echo'<script>alert("user found")</script>';
            echo '<script>location.href="../../../admin/AdminIndex.php";</script>';
        } else {
            echo'<script>alert("error: user not found")</script>';
            echo '<script>location.href="../index.html";</script>';
        }
    }
} 

