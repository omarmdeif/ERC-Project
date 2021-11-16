<?php
   include_once "iLogin.php";
   include_once "user.php";
class volunteer extends user implements iLogin

{
    
           
    public function validate()
    {
        
    }
    public function enrollMission($x)
    {
        $x.addVolunteer($this);
        return $x;
    }
    public function RecieveNotificationUpdate()
    {
        
    }
}
?>