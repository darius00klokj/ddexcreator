<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of Deal
 *
 * @author darius
 */
class Deal extends \DDEX\DDEXNode{
    
    /**
     * 
     * @var DealTerms
     */
    public $DealTerms;
    
    function getDealTerms(): DealTerms {
        return $this->DealTerms;
    }

    function setDealTerms(DealTerms $DealTerms): void {
        $this->DealTerms = $DealTerms;
    }

}
