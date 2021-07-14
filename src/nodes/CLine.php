<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of CLine
 * <CLine>
  <Year>2021</Year>
  <CLineText>Came from JJ</CLineText>
  </CLine>
 * @author darius
 */
class CLine extends \DDEX\DDEXNode {
    //put your code here
    
    public $Year;
    public $CLineText;
    
    function __construct($Year, $CLineText) {
        $this->Year = $Year;
        $this->CLineText = $CLineText;
    }
    
    function getYear() {
        return $this->Year;
    }

    function getCLineText() {
        return $this->CLineText;
    }

    function setYear($Year): void {
        $this->Year = $Year;
    }

    function setCLineText($CLineText): void {
        $this->CLineText = $CLineText;
    }


}
