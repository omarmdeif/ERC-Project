<?php 

class mission{
   public function __construct()
    {
        echo ("hello");
    }
    protected $MissionStartDate;
    private $MissionEndDate;
    private $NumberOfVolunteersInMission;
    private $volunteers =  array();
 
      public function attach($observer) {

        //recieves volunteer and adds it to array of volunteers 
        array_push($this->observers, $observer);
    }

     public function notifyAllVolunteers() {
        foreach ($this->volunteers as $objs){
            $objs->RecieveNotificationUpdate();
        }

}
}