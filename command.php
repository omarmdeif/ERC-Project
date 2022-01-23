<?php
interface command{
    public function execute(): void;
}
class simpleCommand implements command{
    private $fVar;
    public function __construct(strnig $f){
        $this->fVar = $f;
    }
    public function execute(): void{
        echo "this is the simple command's implenetation of the command design pattern";
    }
}
class complexCommand implements command{
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
        $this->receiver->doSomething($this->aVar);
        $this->receiver->doSomething($this->bVar);
    }
}
/* the following class is where you implement the bussiness logic from this commands' side*/
class receiver{
    public function doSomething(string $a){
        echo "receiver is working and is receiving var(" . $a . ".)\n";
    }
    public function doSomethingElse(string $b){
        echo "receiver is working and is receiving something else var(" . $b . ".)\n";
    }
}
/* */
class invoker{
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


