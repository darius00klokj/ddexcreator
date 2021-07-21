<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of MessageRecepient
 *
 * @author darius
 */
class MessageRecipient extends \DDEX\DDEXNode{
    
     
    /**
     * IsDPID="true" IsISNI="false"
     * @var \DDEX\DDEXSingleNode
     */
    public $PartyId;
    
    /**
     * 
     * @var PartyName
     */
    public $PartyName;
    
    function __construct(\DDEX\DDEXSingleNode $PartyId, PartyName $PartyName) {
        $this->PartyId = $PartyId;
        $this->PartyName = $PartyName;
    }
    
    function getPartyId(): \DDEX\DDEXSingleNode {
        return $this->PartyId;
    }

    function getPartyName(): PartyName {
        return $this->PartyName;
    }

    function setPartyId(\DDEX\DDEXSingleNode $PartyId): void {
        $this->PartyId = $PartyId;
    }

    function setPartyName(PartyName $PartyName): void {
        $this->PartyName = $PartyName;
    }


}
