<?php

include_once 'Database.php';

class CreateClass {

    private $db;
    public  $sql = "",$stmt ="";

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    }

    public function insertMoneyRecord($name, $phoneno,$income,$address, $desc) 
   {


$this->sql = "INSERT INTO request (name,phonenum,Income,Description) VALUES ('$name', $phoneno, $income, '$desc')";

   }
   
   public  function AddValuesToDatebase()
   {
       
   if (mysqli_query($this->link, $this->sql)) {
  echo "New record created successfully";  
  return TRUE;
} else {
     echo "Error: " . $this->sql . "<br>" . mysqli_error($this->link);
 
}
 
mysqli_close($this->link);
        return FALSE;
    }

   
   public function insertFoodRecord($name,$phone,$NumOfFam,$Address,$desc)
   {

       $this->sql = "INSERT INTO request (name,phonenum,NumrOfFamMembers,Address,Description) VALUES ('$name', $phone, $NumOfFam,'$Address' ,'$desc')";
        $this->AddValuesToDatebase();
   
   }

}




