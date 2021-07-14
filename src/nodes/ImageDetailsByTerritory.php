<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ImageDetailsByTerritory
 *
 * @author darius
 */
class ImageDetailsByTerritory extends \DDEX\DDEXNode{
    
    public $TerritoryCode;
    
    /**
     * 
     * @var TechnicalImageDetails
     */
    public $TechnicalImageDetails;
    
    function __construct($TerritoryCode) {
        $this->TerritoryCode = $TerritoryCode;
    }
    
    function getTerritoryCode() {
        return $this->TerritoryCode;
    }

    function getTechnicalImageDetails(): TechnicalImageDetails {
        return $this->TechnicalImageDetails;
    }

    function setTerritoryCode($TerritoryCode): void {
        $this->TerritoryCode = $TerritoryCode;
    }

    function setTechnicalImageDetails(TechnicalImageDetails $TechnicalImageDetails): void {
        $this->TechnicalImageDetails = $TechnicalImageDetails;
    }


    
}
