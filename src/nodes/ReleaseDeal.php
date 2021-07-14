<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReleaseDeal
 *
 * @author darius
 */

namespace DDEX\nodes;

class ReleaseDeal extends \DDEX\DDEXNode{
    
    const NAME = 'ReleaseDeal';

    public $DealReleaseReference;
    /**
     * 
     * @var Deal
     */
    public $Deal;
    public $EffectiveDate;
    
    function vars(){
        return get_object_vars($this);
    }

    function getDealReleaseReference() {
        return $this->DealReleaseReference;
    }

    function getDeal(): Deal {
        return $this->Deal;
    }

    function getEffectiveDate() {
        return $this->EffectiveDate;
    }

    function setDealReleaseReference($DealReleaseReference): void {
        $this->DealReleaseReference = $DealReleaseReference;
    }

    function setDeal(Deal $Deal): void {
        $this->Deal = $Deal;
    }

    function setEffectiveDate($EffectiveDate): void {
        $this->EffectiveDate = $EffectiveDate;
    }
}
