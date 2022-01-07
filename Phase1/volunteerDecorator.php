<?php

class volunteer extends user implements iLogin
{
    public function enrollMission($x)
    {
        $x.addVolunteer($this);
        return $x;
    }
    public $id = 4;
    public $Compensation=200;
    public $foundid = mysql_query("SELECT * FROM volunteers WHERE id = ($id) ");
    public function recSalary(): int
    {
        $this->Compensation = $Compensation;
        return Compensation;
    }
}
?>