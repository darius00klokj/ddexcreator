<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ImageId
 *
 * @author darius
 */
class ImageId extends \DDEX\DDEXNode{
    
    /**
     * Namespace="DPID:PADPIDA2019040804V"
     * @var \DDEX\DDEXSingleNode
     */
    public $ProprietaryId;
    
    function getProprietaryId(): \DDEX\DDEXSingleNode {
        return $this->ProprietaryId;
    }

    function setProprietaryId(\DDEX\DDEXSingleNode $ProprietaryId): void {
        $this->ProprietaryId = $ProprietaryId;
    }

}
