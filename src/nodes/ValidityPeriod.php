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
    
    /**
     * 
     * @var DDEXDateTime
     */
    public $StartDateTime;
    
    function __construct(DDEXDateTime $StartDateTime) {
        $this->StartDateTime = $StartDateTime;
    }

    function getStartDateTime(): DDEXDateTime {
        return $this->StartDateTime;
    }

    function setStartDateTime(DDEXDateTime $StartDateTime): void {
        $this->StartDateTime = $StartDateTime;
    }

}
