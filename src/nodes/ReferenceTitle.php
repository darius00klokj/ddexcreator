<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ReferenceTitle
 *<ReferenceTitle>
  <TitleText>Say my name</TitleText>
  </ReferenceTitle>
 * @author darius
 */
class ReferenceTitle extends \DDEX\DDEXNode{
    
    public $TitleText;
    
    function __construct($TitleText) {
        $this->TitleText = $TitleText;
    }
    
    function getTitleText() {
        return $this->TitleText;
    }

    function setTitleText($TitleText): void {
        $this->TitleText = $TitleText;
    }


}
