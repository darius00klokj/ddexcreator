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
     * @var type
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

    function getMessageCreatedDateTime(): type {
        return $this->MessageCreatedDateTime;
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

    function setMessageCreatedDateTime(type $MessageCreatedDateTime) {
        $this->MessageCreatedDateTime = $MessageCreatedDateTime;
    }

    function setMessageControlType($MessageControlType) {
        $this->MessageControlType = $MessageControlType;
    }

}
