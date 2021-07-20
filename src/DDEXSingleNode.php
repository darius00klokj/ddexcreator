<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX;

/**
 * Description of DDEXSingleNode
 *
 * @author darius
 */
class DDEXSingleNode {

    public $name;
    public $value;
    public $attrs = [];

    function __construct($name, $value = NULL, $attrs = []) {
        $this->name = $name;
        $this->value = $value;
        $this->attrs = $attrs;
    }

    /**
     * Returns a single child as XML with a value and attrs
     * 
     * @return SimpleXMLElement
     */
    function toXML() {
        $sxe = new \SimpleXMLElement('<PARENT/>');
        $child = $sxe->addChild($this->getName(), $this->getValue());
        
        foreach ($this->getAttrs() as $name => $attr) {
            if (!$child->attributes($name)) {
                $child->addAttribute($name, $attr);
            }
        }
        
        return $child;
    }

    function getValue() {
        return $this->value;
    }

    function getAttrs() {
        return $this->attrs;
    }

    function setValue($value): void {
        $this->value = $value;
    }

    function setAttrs($attrs): void {
        $this->attrs = $attrs;
    }

    function addAttribute($name, $value) {
        $this->attrs[$name] = $value;
    }

    function getName() {
        return $this->name;
    }

    function setName($name): void {
        $this->name = $name;
    }

}
