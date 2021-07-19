<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of TechnicalSoundRecordingDetails
 *
 * @author darius
 */
class TechnicalSoundRecordingDetails extends \DDEX\DDEXNode {

    const CODEC_FLAC = 'FLAC';
    const CODEC_WAV = 'WAV';
    const CODEC_MP3 = 'MP3';

    public $TechnicalResourceDetailsReference;
    public $AudioCodecType;
    
    /**
     * UnitOfMeasure="kbps"
     * @var \DDEX\DDEXSingleNode
     */
    public $BitRate;
    
    public $NumberOfChannels;
    
    /**
     * UnitOfMeasure="Hz"
     * @var \DDEX\DDEXSingleNode
     */
    public $SamplingRate;

    public $BitsPerSample;
    
    /**
     * 
     * @var \DDEX\DDEXDuration
     */
    public $Duration;
    
    /**
     * 
     * @var File
     */
    public $File;
    
    function __construct($TechnicalResourceDetailsReference, $AudioCodecType) {
        $this->TechnicalResourceDetailsReference = $TechnicalResourceDetailsReference;
        $this->AudioCodecType = $AudioCodecType;
    }

    
    function getTechnicalResourceDetailsReference() {
        return $this->TechnicalResourceDetailsReference;
    }

    function getAudioCodecType() {
        return $this->AudioCodecType;
    }

    function getBitRate(): \DDEX\DDEXSingleNode {
        return $this->BitRate;
    }

    function getNumberOfChannels() {
        return $this->NumberOfChannels;
    }

    function getSamplingRate(): \DDEX\DDEXSingleNode {
        return $this->SamplingRate;
    }

    function getBitsPerSample() {
        return $this->BitsPerSample;
    }

    function getDuration() {
        return $this->Duration;
    }

    function setTechnicalResourceDetailsReference($TechnicalResourceDetailsReference): void {
        $this->TechnicalResourceDetailsReference = $TechnicalResourceDetailsReference;
    }

    function setAudioCodecType($AudioCodecType): void {
        $this->AudioCodecType = $AudioCodecType;
    }

    function setBitRate(\DDEX\DDEXSingleNode $BitRate): void {
        $this->BitRate = $BitRate;
    }

    function setNumberOfChannels($NumberOfChannels): void {
        $this->NumberOfChannels = $NumberOfChannels;
    }

    function setSamplingRate(\DDEX\DDEXSingleNode $SamplingRate): void {
        $this->SamplingRate = $SamplingRate;
    }

    function setBitsPerSample($BitsPerSample): void {
        $this->BitsPerSample = $BitsPerSample;
    }

    function setDuration(\DDEX\DDEXDuration $Duration): void {
        $this->Duration = $Duration;
    }
    
    function getFile(): File {
        return $this->File;
    }

    function setFile(File $File): void {
        $this->File = $File;
    }

}
