<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of DealList
 *
 * @author darius
 */
class DealList extends \DDEX\DDEXNode{
    
    /**
     * 
     * @var ReleaseDeal[]
     */
    public $ReleaseDeal = [];
    
    function getReleaseDeal(): array {
        return $this->ReleaseDeal;
    }

    function setReleaseDeal(array $ReleaseDeal): void {
        $this->ReleaseDeal = $ReleaseDeal;
    }
    
    function addReleaseDeal(ReleaseDeal $rel){
        $this->ReleaseDeal[] = $rel;
    }


}
