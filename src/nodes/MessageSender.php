<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of MessageSender
 *
 * @author darius
 */
class MessageSender extends \DDEX\DDEXNode{
    
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
}
