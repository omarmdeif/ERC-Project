<?php
        include_once '../Model/Database.php';
        class getMess{
            private $id;
            private $db;
            private $link;
            public function __construct($id){
                $this->db = new Database();
                $this->link = $this->db->connectToDB();
                
                $this->id = $id;
            }
            // public function fetchMess(){
            // $sql  = "SELECT messages.messagetemp FROM messageuser LEFT JOIN messages ON messageuser.messageid = messages.id WHERE messageuser.userid ={$this->id}";  
            // $res = mysqli_query($this->link, $sql);
            // if(mysqli_num_rows($res)>0){
            // while($row = mysqli_fetch_array($res)){
            //     // echo $id;
            //     // echo "- ";
            //     echo $row['messagetemp'] ;
            //     echo "<br>"; 
            // }
            public function fetchMess() {

                $sql = "SELECT messages.messagetemp FROM messageuser LEFT JOIN messages ON messageuser.messageid = messages.id WHERE messageuser.userid ={$this->id}";  
                if ($result = mysqli_query($this->link, $sql)) {
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                            echo $row['messagetemp'] ;
                            echo "<br>"; 
                        }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
                    return false;
                }
        
                mysqli_close($this->link);
            }
            }
            }
        

  // put your code here
?>