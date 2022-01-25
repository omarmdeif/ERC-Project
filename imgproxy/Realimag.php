<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Realimag
 *
 * @author Mohamed Alaa
 */
include_once 'img.php';
class Realimag implements img {
    //put your code here
    public $result, $result2;
    function __construct() {
        $this->loaadfromdatabase();
        ;
    }
    function loaadfromdatabase ()
    {
        
        echo 'loded from database';
             echo '<br>';

    }
    public function show() {
        echo 'My photo';
             echo '<br>';

        
  

        }
        

}
