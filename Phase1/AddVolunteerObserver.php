<?php 
   include_once "volunteer.php";

   class    AddVolunteerObserver extends volunteer{

    public function RecieveNotificationUpdate() {
        echo ("You joined THIS mission");
        
    }  
   }