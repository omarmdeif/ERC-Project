<?php

if ($_POST) {
    if (isset($_POST['register']) && $_POST['register'] == "Register") {

        include_once 'User.php';
        $user = new User();
        $user->setUsername($_POST['registerUsername']);
        $user->setPassword($_POST['registerPassword']);

        $result = $user->register($user);
        if ($result == true){
            echo'<script>alert("added successfully")</script>';
            header("location: ../");}
        else{
            echo'<script>alert("error while registering")</script>';}
    }
} 
