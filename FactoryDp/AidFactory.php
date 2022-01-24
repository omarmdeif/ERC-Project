<?php

include_once('FoodAidClass.php');

include_once('MoneyAidClass.php');

class AidFactory
{


    public function GetAidType($aidtype)
    {
        if ($aidtype == null) return null;
        if ($aidtype == "Money") 
        {
            return new MoneyAid();
        }
        if ($aidtype == "Food"){
       
             return new FoodAid();
        }
        return null;

    }

}


