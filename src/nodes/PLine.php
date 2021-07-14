<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of PLine
 *<PLine>
    <Year>2021</Year>
    <PLineText>Sound Republica, Inc.</PLineText>
  </PLine>
 * @author darius
 */
class PLine extends \DDEX\DDEXNode{
    //put your code here
    
    public $Year;
    public $PLineText;
    
    function __construct($Year, $PLineText) {
        $this->Year = $Year;
        $this->PLineText = $PLineText;
    }

    function getYear() {
        return $this->Year;
    }

    function getPLineText() {
        return $this->PLineText;
    }

    function setYear($Year): void {
        $this->Year = $Year;
    }

    function setPLineText($PLineText): void {
        $this->PLineText = $PLineText;
    }


}
