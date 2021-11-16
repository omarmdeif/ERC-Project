<?
include_once "mission.php";
class admin extends user implements iLogin
{
    private $ongoingMissions = array();
    public function getOngoingMissions()
    {
        //Fill array with ongoing missions from database 
    }
    public function validate(){
        
    }
    public function createMission()
    {
        //Get input from html
        $missionObj = new mission();

        // save mission to database

    }

    public function GetVolunteerById($volunteerId)
    {
        return $obj;
    }
    public function addVolunteerToMission($mission)
    {
        $volunterId;
        // input from html
        $obj = GetVolunteerById(volunteerId);
    
        $missionObj->attach(obj);

        // update in database
    }

  
    public function addMission(){
        $newMission = new mission();
        return $newMission;
    }
}

?>