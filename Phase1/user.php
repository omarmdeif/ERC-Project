<?php
class user{
    private $id;
    private $name;
    private $email;
    private $phoneNo;
    private $address;
    public function setName($n){
        $name = $n;
    }
    public function setEmail($e){
        $email = $e;
    }
    public function setPhoneNo($pno){
        $phoneNo = $pno;
    }
    public function setAddress($ad){
        $address = $ad;
    }
    public function getName(){
        return $name;
    }
    public function getEmail(){
        return $email;
    }
    public function getPhoneNo(){
        return $phoneNo;
    }
    public function getAddress(){
        return $address;
    }
}

 ?>