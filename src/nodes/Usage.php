<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of Usage
 *
 * @author darius
 */
class Usage extends \DDEX\DDEXNode{
    
    const NAME = 'Usage';
    
    public $UseType;
    
    function getUseType() {
        return $this->UseType;
    }

    function setUseType($UseType): void {
        $this->UseType = $UseType;
    }


}
