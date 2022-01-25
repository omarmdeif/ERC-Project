<?php
include_once 'TypeA.php';
include_once 'TypeAB.php';
include_once 'TypeB.php';
include_once 'TypeO.php';
include_once 'StateInterface.php';
include_once 'Executor.php';
include_once 'StateContext.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of TypeO
 *
 * @author Ahmed
 */
class TypeO implements StateInterface{
    //put your code here
    public function pick() {
        echo("Donor donating blood type 'O'");
    }

}
