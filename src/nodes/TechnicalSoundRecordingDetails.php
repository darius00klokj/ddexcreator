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
    
    public $Duration;
}
