<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proxyimg
 *
 * @author Mohamed Alaa
 */
class Proxyimg implements img{
    
    //put your code here
    private $Rimg=null;
    public function show() {
        if($this->Rimg==null)
        {
            $this->Rimg= new Realimag();
        }
        $this->Rimg->show();
        }
        
    }

