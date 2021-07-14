<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ResourceGroupContentItem
 *
 * @author darius
 */
class ResourceGroupContentItem extends \DDEX\DDEXNode{
    
    const TYPE_SOUND_RECORDING = 'SoundRecording';
    const TYPE_Image = 'Image';
    const RESOURCE_PRIMARY = 'PrimaryResource';
    const RESOURCE_SECONDAY = 'SecondaryResource'; // Images etc...
    
    public $SequenceNumber;
    public $ResourceType;
    
    /**
     * ReleaseResourceType="PrimaryResource"
     * @var DDEX\DDEXSingleNode
     */
    public $ReleaseResourceReference;
    
    function getSequenceNumber() {
        return $this->SequenceNumber;
    }

    function getResourceType() {
        return $this->ResourceType;
    }

    function getReleaseResourceReference(){
        return $this->ReleaseResourceReference;
    }

    function setSequenceNumber($SequenceNumber): void {
        $this->SequenceNumber = $SequenceNumber;
    }

    function setResourceType($ResourceType): void {
        $this->ResourceType = $ResourceType;
    }

    function setReleaseResourceReference(\DDEX\DDEXSingleNode $ReleaseResourceReference): void {
        $this->ReleaseResourceReference = $ReleaseResourceReference;
    }


    
}
