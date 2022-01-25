<?php
include_once 'Database.php';


/*EXCUTE: REQUESTS CASH/BLOOD/WHATEVER MAY BE NEEDED FOR REQUESTS 
 * UNDO: IF REQUEST HASN'T BEEN APPROVED YET THEN CANCEL IT, IF ITS ALREADY ACCEPTED THEN RETURN IT
*/
class Volunteer {
    private $vName;
    private $vEmail;
    private $vpNumber;
    private $vHours;
    private $vAddress;
    private $vCompensation;
    private $vID;
    public function __construct($n, $e, $pn, $h, $a, $c, $id){
        $vName = $n;
        $vEmail = $e;
        $vpNumber = $pn;
        $vHours = $h;
        $vAddress = $a;
        $vCompensation = $c;
        $vID = $id;
    }
}
interface command{
    public function excute();
}
class removeVolunteer implements command{
    public function __construct(){

    }
    public function excute(){

    }
}
class addVolunteer implements command{
    private $db;
    private Volunteer $vol; 
    // public function __construct($name, $email, $pNumber, $hours, $address, $compensation, $id){
    //     $this->db = new Database();
    //     $this->link = $this->db->connectToDB();
    //     $this->n = $name;
    //     $this->e = $email;
    //     $this->pn = $pNumber;
    //     $this->h = $hours;
    //     $this->a = $address;
    //     $this->c = $compensation;
    //     $this->id = $id;
    // }
    public function __construct(Volunteer $vols){
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
        $vol = $vols;
    }
    public function excute(){
        $sql = "UPDATE volunteers SET vName=?, vEmail=?, pNumber=?, vHours=?, vAddress=?, vCompensation=? WHERE id=?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssssi", $name, $email, $pNumber, $hours, $address, $compensation, $vID);

            
            $name = $vol->vName;
            $email = $vol->vEmail;
            $pNumber = $vol->vpNumber;
            $hours = $vol->vHours;
            $address = $vol->vAddress;
            $compensation = $vol->vCompensation;
            $id = $vol->vID;

            if (mysqli_stmt_execute($stmt)) {
                
                return true;
            } else {
                return false;
            }
        }

        mysqli_stmt_close($stmt);

        
        mysqli_close($link);
    }
}
// class requestClothes implements command{
//     public function __construct(){

//     }
//     public function excute(){

//     }
//     public function undo(){
        
//     }
// }

class Invoker{
    private command $com;
    public function setCommand(command $comm){
        $com = $comm;
    }
    /*DB CREATED HERE */
    public function __construct(){
        /*ESTABLISH CONNECTION */
    }
    public function doIt(){
        $com.execute();
    }
}

$inv = new Invoker();
$vol = new Volunteer("ahmed", "ahmed@gmail.com","01157979600","10","6th of October");
$inv->setCommand(new addVolunteer($vol));
$inv->doIt();

?>