<?php

include_once 'TypeA.php';
include_once 'TypeAB.php';
include_once 'TypeB.php';
include_once 'TypeO.php';
include_once 'StateContext.php';
include_once 'Executor.php';
include_once 'index.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author Ahmed
 */
interface StateInterface {
    public function pick();
}
