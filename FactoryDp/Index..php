<?php

include_once('AidFactory.php');


   $aidfactory;
    $aid;    
    $temp = $_POST["radiobtn"];
    
 $aidfactory = new AidFactory();
                       
                $aid = $aidfactory->GetAidType($temp);
        $aid->RequestAid();  
        $aid->Display();
    
      