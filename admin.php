<?php
class admin extends user implements iLogin
{
    public function validate(){
        
    }
    public function addMission(){
        $newMission = new mission();
        return $newMission;
    }
}

?>