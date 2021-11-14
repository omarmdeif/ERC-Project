<?php
class volunteer extends user implements iLogin
{
    public function enrollMission($x)
    {
        $x.addVolunteer($this);
        return $x;
    }
}
?>