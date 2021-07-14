<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ReleaseList
 *
 * @author darius
 */
class ReleaseList extends \DDEX\DDEXNode{
    
    /**
     * 
     * @var Release[]
     */
    public $Release;
    
    function addRelease(Release $rel){
        $this->Release[] = $rel;
    }
    
    function getRelease(): array {
        return $this->Release;
    }

    function setRelease(array $Release): void {
        $this->Release = $Release;
    }


}
