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
    
    private $type = 'ern';
    
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
    
}
