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
     * @var type
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

    function getDuration(): type {
        return $this->Duration;
    }

    function getSoundRecordingDetailsByTerritory(): array {
        return $this->SoundRecordingDetailsByTerritory;
    }

    function setSoundRecordingType($SoundRecordingType): void {
        $this->SoundRecordingType = $SoundRecordingType;
    }

    function setSoundRecordingId(SoundRecordingId $SoundRecordingId): void {
        $this->SoundRecordingId = $SoundRecordingId;
    }

    function setResourceReference($ResourceReference): void {
        $this->ResourceReference = $ResourceReference;
    }

    function setReferenceTitle(ReferenceTitle $ReferenceTitle): void {
        $this->ReferenceTitle = $ReferenceTitle;
    }

    function setDuration(type $Duration): void {
        $this->Duration = $Duration;
    }

    function setSoundRecordingDetailsByTerritory(array $SoundRecordingDetailsByTerritory): void {
        $this->SoundRecordingDetailsByTerritory = $SoundRecordingDetailsByTerritory;
    }

}
