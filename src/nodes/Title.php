<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of Title
 *<Title TitleType="FormalTitle">
  <TitleText>Say my name</TitleText>
  </Title>
 * @author darius
 */
class Title extends \DDEX\DDEXNode{
    
    const TYPE_DISPLAY = 'DisplayTitle';
    const TYPE_FORMAL = 'FormalTitle';
    const TYPE_GROUPING = 'GroupingTitle';
    
    //put your code here
    public $TitleText;
    
    function __construct($TitleText, $type = NULL) {
        $this->TitleText = $TitleText;
        if($type){
            $this->addAttr('TitleType', $type);
        }
    }

    function getTitleText() {
        return $this->TitleText;
    }

    function setTitleText($TitleText): void {
        $this->TitleText = $TitleText;
    }

}
