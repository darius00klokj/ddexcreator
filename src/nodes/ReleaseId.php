<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ReleaseId
 *<ReleaseId>
  <ICPN IsEan="true">YOUR UPC OR EAN HERE</ICPN>
  <CatalogNumber Namespace="DPID:YOUR DPID HERE">YOUR CATALOG NUMBER HERE</CatalogNumber>
  </ReleaseId>
 * @author darius
 */
class ReleaseId extends \DDEX\DDEXNode{
    
    /**
     * IsEan="true"
     * @var \DDEX\DDEXSingleNode
     */
    public $ICPN;
    /**
     * Namespace="DPID:YOUR DPID HERE"
     * @var \DDEX\DDEXSingleNode
     */
    public $CatalogNumber;
    
    public $ISRC;
    
    function getCatalogNumber(): \DDEX\DDEXSingleNode {
        return $this->CatalogNumber;
    }
    
    function getICPN(): \DDEX\DDEXSingleNode {
        return $this->ICPN;
    }

    function setICPN(\DDEX\DDEXSingleNode $ICPN): void {
        $this->ICPN = $ICPN;
    }

    function setCatalogNumber(\DDEX\DDEXSingleNode $CatalogNumber): void {
        $this->CatalogNumber = $CatalogNumber;
    }



}
