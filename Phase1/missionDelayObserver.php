<?php 
   include_once "volunteer.php";

   class missionDelayObserver extends volunteer{
private $NewMissionDate;
public function SetNewMissionDate($x)
{
   $NewMissionDate = x;
}
    public function RecieveNotificationUpdate() {
        echo ("Mission new date is: "+$NewMissionDate);
    }  
   }