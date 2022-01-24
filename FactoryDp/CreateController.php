

<?php
$name = $phoneno  = $address  = $desc = $Fn  = "";
$name_err = $phoneno_err  = $address_err  = $desc_err = "";

include_once 'AidFactory.php';
$income = -1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }
    if (empty($input_FamNum)) {

    $input_FamNum= trim($_POST["FamNumber"]);
    if (empty($input_FamNum)) {
        $phoneno_err = "Please enter an date.";
    } else {
        
        $Fn= $input_FamNum;
    }
    
    $input_number= trim($_POST["PhoneNumber"]);
    if (empty($input_number)) {
        $phoneno_err = "Please enter an date.";
    } else {
        $phoneno = $input_number;
    }
    $input_address = trim($_POST["address"]);
    if (empty($input_address)) {
        $address_err = "Please enter an address.";
    } else {
        $address = $input_address;
    }
       
    $income= trim($_POST["Income"]);

	//$TypeOfAid = $_REQUEST['typeofaid'];
    
 	if ($income == -1)
        {
                    //food
            $TypeOfAid = 2;
            $ReqType = 1;
        }
        else
        { 
            //money
  
            $TypeOfAid = 1;
            $ReqType = 0;
        }

    $input_desc = trim($_POST["desc"]);
    if (empty($input_desc)) {
        $address_err = "Please enter an address.";
    } else {
        $desc = $input_desc;
    }



        include_once 'CreateAidClass.php';
        $creator = new CreateClass();
        if ($TypeOfAid == 1)
        {
            $creator->insertMoneyRecord($name, $phoneno, $income,$address,$desc,$ReqType);
       
                    if ($creator->AddValuesToDatebase()) 
                            {
            header("location: ../index.php");
        } else {
            echo "Something went wrong. lease try again later.";
        }
        }
        if ($TypeOfAid == 2)
        {
           
            $creator->insertFoodRecord($name, $phoneno, $Fn,$address,$desc,$ReqType);

        } else {
            echo "Something went wrong. lease try again later.";
        }
        }

    }


?>