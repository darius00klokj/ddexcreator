<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ValidityPeriod
 *
 * @author darius
 */
class ValidityPeriod extends \DDEX\DDEXNode{
    
    public $StartDateTime;
    
    function __construct($StartDateTime) {
        $this->StartDateTime = $StartDateTime;
    }
    
    function getStartDateTime() {
        return $this->StartDateTime;
    }

    function setStartDateTime($StartDateTime): void {
        $this->StartDateTime = $StartDateTime;
    }

}
