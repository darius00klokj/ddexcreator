<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX;

use DDEX\DDEXSingleNode;

/**
 * Description of DDEXNode
 *
 * @author darius
 */
class DDEXNode {

    private $attrs = [];
    
    /**
     * 
     * @return \SimpleXMLElement
     */
    public function toXML(\SimpleXMLElement $sxe = NULL) {

        $name = $this->getName();
        $vars = $this->vars();
        $attrs = $this->attrs();

        /**
         * Create a parent, but we will work with the child directly
         */
        $sxe = is_null($sxe) ? new \SimpleXMLElement('<PARENT/>') : $sxe;
        $child = $sxe->addChild($name);
        $this->loopAttrs($child, $attrs);
        $this->loop($child, $vars);

        return $child;
    }

    function loopAttrs(\SimpleXMLElement $sxe, $attrs) {
        if ($attrs) {
            foreach ($attrs as $name => $attr) {
                if (!$sxe->attributes($name)) {
                    $sxe->addAttribute($name, $attr);
                }
            }
        }
    }

    function loop(\SimpleXMLElement $sxe, $vars) {
        foreach ($vars as $name => $value) {

            if (is_null($value)) {
                continue;
            }

            if (is_array($value)) {
                $this->loop($sxe, $value);
            } elseif (is_a($value, DDEXNode::class)) {
                $value->toXML($sxe);
            } elseif (is_a($value, DDEXSingleNode::class)) {
                /* @var $singleNode \DDEX\DDEXSingleNode */
                $singleNode = $value;
                $child = $sxe->addChild($singleNode->getName(), $singleNode->getValue());
                $this->loopAttrs($child, $singleNode->getAttrs());
            } elseif (is_a($value, DDEXDateTime::class)) {
                /* @var $timeNode \DDEX\DDEXDateTime */
                $timeNode = $value;
                $sxe->addChild($name, $timeNode->getAsString());
            } elseif (is_a($value, DDEXDuration::class)) {
                /* @var $timeNode \DDEX\DDEXDuration */
                $timeNode = $value;
                $sxe->addChild($name, $timeNode->getAsString());
            } else {
                $sxe->addChild($name, htmlspecialchars($value));
            }
        }
    }

    function addAttr($name, $value) {
        $this->attrs[$name] = $value;
    }

    function attrs() {
        return $this->attrs;
    }

    function vars() {
        $vars = get_object_vars($this);
        unset($vars['attrs']);
        return $vars;
    }

    function getName() {
        $name = static::class;
        $parts = explode("\\", $name);

        $nodeName = $parts[count($parts) - 1];
        return $nodeName;
    }

}
