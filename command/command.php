<?php
include_once 'Database.php';
interface command{
    public function execute(): void;
    public function undo(): void;
}
class requestBlood implements command{
    private $fVar;
    public function __construct(strnig $f){
        $this->fVar = $f;
    }
    public function execute(): void{
        echo "requesting blood";
    }
    public function undo(): void{
        echo"returning blood";
    }
}
class requestCash implements command{
    private $fVar;
    public function __construct(strnig $f){
        $this->fVar = $f;
    }
    public function execute(): void{
        echo "requesting cash";
    }
    public function undo(): void{
        echo"returning cash";
    }
}
class returnRequested implements command{
    private $receiver;
    private $aVar;
    private $bVar;
    public function __construct(receiver $receiver, string $a, string $b){
        $this->receiver = $receiver;
        $this->aVar = $a;
        $this->bVar = $b;
    }
    /* here is where you implement all receiver functions*/
    public function excute(): void{
        echo "this is the complex command's implementation of the command design pattern";
        $this->receiver->request($this->aVar);
        $this->receiver->donRequest($this->bVar);
    }
}
/* the following class is where you implement the bussiness logic from this commands' side*/
class missionActions{
    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    public function request(string $a){
        echo "receiver is working and is receiving var(" . $a . ".)\n";
    }
    public function donRequest(string $b){
        echo "receiver is working and is receiving something else var(" . $b . ".)\n";
    }
}
/* */
class invoker{
    private $db;

    public function __construct() {
        echo 'created';
        $this->db = new Database();
        $this->link = $this->db->connectToDB();
    /** the following onstart and onfinish are command class variables 
     * to set what command is currently running on start and on finish */
    private $onStart;
    private $onFinish;
    public function setOnStart(command $com): void{
        $this->onStart = $com;
    }
    public function setOnFinish(command $com): void{
        $this->onFinish = $com;
    }
    public function doSomethingImportant(): void{
        /**does anyone want something done before the invoker begins */
        if ($this->onStart instanceof command){
            $this->onStart->execute();
        }

        /**DOING SOMETHING REALLY REALLY IMPORTANT HERE */

        /**does anyone want something done before the invoker begins */
        if ($this->onFinish instanceof command){
            $this->onFinish->execute();
        }
    }

}

$inv = new invoker();
$inv->setOnStart(new simpleCommand("HELLO!"));
$rec = new receiver();
$inv->setOnFinish(new complexCommand($rec, "param1", "param2"));

$inv->doSomethingImportant();


/** MISSION REQIUREMENTS REQUESTED BY ALL MISSIONS WITH DIFFERENT PARMS AND IMPLEMENTATIONS FOR EACH MISSION*/

?>


