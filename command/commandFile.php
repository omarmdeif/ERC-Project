<?php



/*EXCUTE: REQUESTS CASH/BLOOD/WHATEVER MAY BE NEEDED FOR REQUESTS 
 * UNDO: IF REQUEST HASN'T BEEN APPROVED YET THEN CANCEL IT, IF ITS ALREADY ACCEPTED THEN RETURN IT
*/
class Volunteer {
    public $vName;
    public $vEmail;
    public $vpNumber;
    public $vHours;
    public $vAddress;
    public $vCompensation;
    public $missionID;
    public $vID;
    public function __construct($n, $e, $pn, $h, $a, $c,$mid, $id){
        $this->vName = $n;
        $this->vEmail = $e;
        $this->vpNumber = $pn;
        $this->vHours = $h;
        $this->vAddress = $a;
        $this->vCompensation = $c;
        $this->missionID = $mid;
        $this->vID = $id;
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
include_once 'Database.php';
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
        $this->vol = $vols;
    }
    public function excute(){
        $sql = "UPDATE volunteers SET vName=?, vEmail=?, pNumber=?, vHours=?, vAddress=?, vCompensation=?, missionID=? WHERE id=?";

        if ($stmt = mysqli_prepare($this->link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssiisiii", $name, $email, $pNumber, $hours, $address, $compensation,$missionID , $id);
            $name = $this->vol->vName;
            $email = $this->vol->vEmail;
            $pNumber = $this->vol->vpNumber;
            $hours = $this->vol->vHours;
            $address = $this->vol->vAddress;
            $compensation = $this->vol->vCompensation;
            $missionID = $this->vol->missionID;
            $id = $this->vol->vID;

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
        $this->com = $comm;
    }
    /*DB CREATED HERE */
    public function __construct(){
        /*ESTABLISH CONNECTION */
    }
    public function excute(){
        $this->com->excute();
    }
}

$inv = new Invoker();
$vol = new Volunteer("ahmed", "ahmed@gmail.com", 01157 ,10,"6th of October", 1000,2, 1);
$inv->setCommand(new addVolunteer($vol));
$inv->excute();


?>