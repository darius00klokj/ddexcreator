<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX;

/**
 * Description of DDEXNode
 *
 * @author darius
 */
class DDEXNode {

    const NAME = self::class;
    
    public function toXML() {
        
        $name = static::NAME;
        
        $xml = new SimpleXMLElement(sprintf('<%s/>', $name));
        $vars = get_class_vars(static::class);
        
        $xmlnodes = [];
        
        foreach($vars as $name => $value){
            
            if(is_a($value, DDEXNode::class)){
                $xmlnodes[$name] = $value->toXML();
            }
            else{
                $xmlnodes[$name] = $value;
            }
        }
        
        return $xml->asXML();
    }

}
