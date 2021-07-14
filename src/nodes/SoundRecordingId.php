<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of SoundRecordingId
 *
 * @author darius
 */
class SoundRecordingId extends \DDEX\DDEXNode{
    
    public $ISRC;
    
    /**
     * 
     * @var \DDEX\DDEXSingleNode
     */
    public $CatalogNumber;
    
    function __construct($ISRC, \DDEX\DDEXSingleNode $CatalogNumber = NULL) {
        $this->ISRC = $ISRC;
        $this->CatalogNumber = $CatalogNumber;
    }

    function getISRC() {
        return $this->ISRC;
    }

    function getCatalogNumber(): \DDEX\DDEXSingleNode {
        return $this->CatalogNumber;
    }

    function setISRC($ISRC): void {
        $this->ISRC = $ISRC;
    }

    function setCatalogNumber(\DDEX\DDEXSingleNode $CatalogNumber): void {
        $this->CatalogNumber = $CatalogNumber;
    }


    
    
}
