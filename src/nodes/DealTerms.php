<?php


namespace DDEX\nodes;

/**
 * Description of DealTerms
 *
 * @author darius
 */
class DealTerms extends \DDEX\DDEXNode{
    
    private $CommercialModelType;
    
    /**
     * 
     * @var Usage
     */
    private $Usage;
    private $TerritoryCode;
    private $StartDateTime;
    
    function getCommercialModelType() {
        return $this->CommercialModelType;
    }

    function getUsage(): Usage {
        return $this->Usage;
    }

    function getTerritoryCode() {
        return $this->TerritoryCode;
    }

    function getStartDateTime() {
        return $this->StartDateTime;
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

    function setStartDateTime($StartDateTime): void {
        $this->StartDateTime = $StartDateTime;
    }


    
}
