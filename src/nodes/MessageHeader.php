<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of MessageHeader
 *
 * @author darius
 */
class MessageHeader extends \DDEX\DDEXNode {

    public $MessageThreadId;
    public $MessageId;

    /**
     * 
     * @var MessageSender
     */
    public $MessageSender;

    /**
     * 
     * @var MessageRecepient
     */
    public $MessageRecipient;

    /**
     * 2021-07-01T01:45:54.044878
     * @var \DDEX\DDEXDateTime
     */
    public $MessageCreatedDateTime;
    public $MessageControlType;

    function __construct($MessageId, $MessageControlType = 'LiveMessage') {
        $this->MessageId = $MessageId;
        $this->MessageControlType = $MessageControlType;
    }

    function getMessageThreadId() {
        return $this->MessageThreadId;
    }

    function getMessageId() {
        return $this->MessageId;
    }

    function getMessageSender(): MessageSender {
        return $this->MessageSender;
    }

    function getMessageRecipient(): MessageRecepient {
        return $this->MessageRecipient;
    }

    function getMessageControlType() {
        return $this->MessageControlType;
    }

    function setMessageThreadId($MessageThreadId) {
        $this->MessageThreadId = $MessageThreadId;
    }

    function setMessageId($MessageId) {
        $this->MessageId = $MessageId;
    }

    function setMessageSender(MessageSender $MessageSender) {
        $this->MessageSender = $MessageSender;
    }

    function setMessageRecipient(MessageRecepient $MessageRecipient) {
        $this->MessageRecipient = $MessageRecipient;
    }

    function setMessageControlType($MessageControlType) {
        $this->MessageControlType = $MessageControlType;
    }
    
    function getMessageCreatedDateTime(): \DDEX\DDEXDateTime {
        return $this->MessageCreatedDateTime;
    }

    function setMessageCreatedDateTime(\DDEX\DDEXDateTime $MessageCreatedDateTime): void {
        $this->MessageCreatedDateTime = $MessageCreatedDateTime;
    }


}
