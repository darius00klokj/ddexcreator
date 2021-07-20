<?php


namespace DDEX\nodes;

/**
 * Description of DealTerms
 *
 * @author darius
 */
class DealTerms extends \DDEX\DDEXNode{
    
    CONST TYPE_ConditionalDownload = 'ConditionalDownload';
    CONST TYPE_Stream = 'Stream';
    
    public $CommercialModelType;
    
    /**
     * 
     * @var Usage
     */
    public $Usage;
    public $TerritoryCode;
    
    /**
     * 
     * @var ValidityPeriod
     */
    public $ValidityPeriod;
    
    static function getDealTermTypes(){
        
        return [
            'SubscriptionModel',
            'AdvertisementSupportedModel',
        ];
        
    }
    function getCommercialModelType() {
        return $this->CommercialModelType;
    }

    function getUsage(): Usage {
        return $this->Usage;
    }

    function getTerritoryCode() {
        return $this->TerritoryCode;
    }

    function setCommercialModelType($CommercialModelType): void {
        $this->CommercialModelType = $CommercialModelType;
    }

    function setUsage(Usage $Usage): void {
        $this->Usage = $Usage;
    }

    function setTerritoryCode($TerritoryCode): void {
        $this->TerritoryCode = $TerritoryCode;
    }
    
    function getValidityPeriod(): ValidityPeriod {
        return $this->ValidityPeriod;
    }

    function setValidityPeriod(ValidityPeriod $ValidityPeriod): void {
        $this->ValidityPeriod = $ValidityPeriod;
    }

}
