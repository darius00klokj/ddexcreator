<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of SoundRecording
 *
 * @author darius
 */
class SoundRecording extends \DDEX\DDEXNode{
    
    const TYPE_MUSIC = 'MusicalWorkSoundRecording';
    
    public $SoundRecordingType;
    
    /**
     * 
     * @var SoundRecordingId
     */
    public $SoundRecordingId;
    public $ResourceReference;
    
    /**
     * 
     * @var ReferenceTitle
     */
    public $ReferenceTitle;
    
    /**
     * PT02M48S
     * @var \DDEX\DDEXDuration 
     */
    public $Duration;
    
    /**
     * 
     * @var SoundRecordingDetailsByTerritory[]
     */
    public $SoundRecordingDetailsByTerritory;
    
    function __construct($isUpdated = NULL) {
        
        if(!is_null($isUpdated)){
            $this->addAttr('IsUpdated', $isUpdated ? 'true' : 'false');
        }
        
        $this->setSoundRecordingType(static::TYPE_MUSIC);
        
    }
    
    function addSoundRecordingDetailsByTerritory(SoundRecordingDetailsByTerritory $srt){
        if(!$this->SoundRecordingDetailsByTerritory){
            $this->SoundRecordingDetailsByTerritory = [];
        }
        
        $this->SoundRecordingDetailsByTerritory[] = $srt;
    }
    
    function getSoundRecordingType() {
        return $this->SoundRecordingType;
    }

    function getSoundRecordingId(): SoundRecordingId {
        return $this->SoundRecordingId;
    }

    function getResourceReference() {
        return $this->ResourceReference;
    }

    function getReferenceTitle(): ReferenceTitle {
        return $this->ReferenceTitle;
    }

    function getDuration() {
        return $this->Duration;
    }

    function getSoundRecordingDetailsByTerritory(): array {
        return $this->SoundRecordingDetailsByTerritory;
    }

    function setSoundRecordingType($SoundRecordingType) {
        $this->SoundRecordingType = $SoundRecordingType;
    }

    function setSoundRecordingId(SoundRecordingId $SoundRecordingId) {
        $this->SoundRecordingId = $SoundRecordingId;
    }

    function setResourceReference($ResourceReference) {
        $this->ResourceReference = $ResourceReference;
    }

    function setReferenceTitle(ReferenceTitle $ReferenceTitle) {
        $this->ReferenceTitle = $ReferenceTitle;
    }

    function setDuration(\DDEX\DDEXDuration $Duration) {
        $this->Duration = $Duration;
    }

    function setSoundRecordingDetailsByTerritory(array $SoundRecordingDetailsByTerritory) {
        $this->SoundRecordingDetailsByTerritory = $SoundRecordingDetailsByTerritory;
    }

}
