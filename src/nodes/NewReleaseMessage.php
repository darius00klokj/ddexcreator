<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of NewReleaseMessage
 *
 * @author darius
 */
class NewReleaseMessage extends \DDEX\DDEXNode{
    
    const MESSAGE_UPDATE = 'UpdateMessage';
    const MESSAGE_ORIGINAL = 'OriginalMessage';
    const MESSAGE_TAKEDOWN = 'TakedownMessage';
    
    /**
     * 
     * @var MessageHeader
     */
    public $MessageHeader;
    
    public $UpdateIndicator;
    
    /**
     * 
     * @var ResourceList
     */
    public $ResourceList;
    
    /**
     * 
     * @var ReleaseList
     */
    public $ReleaseList;
    
    /**
     * 
     * @var DealList
     */
    public $DealList;
    
    function __construct($UpdateIndicator) {
        $this->UpdateIndicator = $UpdateIndicator;
    }
    
    function getMessageHeader(): MessageHeader {
        return $this->MessageHeader;
    }

    function getUpdateIndicator() {
        return $this->UpdateIndicator;
    }

    function getResourceList(): ResourceList {
        return $this->ResourceList;
    }

    function getReleaseList(): ReleaseList {
        return $this->ReleaseList;
    }

    function getDealList(): DealList {
        return $this->DealList;
    }

    function setMessageHeader(MessageHeader $MessageHeader): void {
        $this->MessageHeader = $MessageHeader;
    }

    function setUpdateIndicator($UpdateIndicator): void {
        $this->UpdateIndicator = $UpdateIndicator;
    }

    function setResourceList(ResourceList $ResourceList): void {
        $this->ResourceList = $ResourceList;
    }

    function setReleaseList(ReleaseList $ReleaseList): void {
        $this->ReleaseList = $ReleaseList;
    }

    function setDealList(DealList $DealList): void {
        $this->DealList = $DealList;
    }


    
}
