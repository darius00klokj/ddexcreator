<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of PartyName
 *
 * @author darius
 */
class PartyName extends \DDEX\DDEXNode{
   
    public $FullName;
    
    function __construct($FullName) {
        $this->FullName = $FullName;
    }

    function getFullName() {
        return $this->FullName;
    }

    function setFullName($FullName): void {
        $this->FullName = $FullName;
    }

}
