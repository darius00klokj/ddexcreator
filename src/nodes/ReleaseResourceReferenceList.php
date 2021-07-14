<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ReleaseResourceReferenceList
 *
 * @author darius
 */
class ReleaseResourceReferenceList extends \DDEX\DDEXNode{
    
    const TYPE_PRIMARY = 'PrimaryResource';
    const TYPE_SECONDARY = 'SecondaryResource';
    
    /**
     * 
     * @var \DDEX\DDEXSingleNode[]
     */
    public $ReleaseResourceReference;
    
    function addReleaseResourceReference($value, $type){
        $ref = new \DDEX\DDEXSingleNode('ReleaseResourceReference');
        $ref->setValue($value);
        $ref->addAttribute('ReleaseResourceType', $type);
        
        if(!$this->ReleaseResourceReference){
            $this->ReleaseResourceReference = [];
        }
        
        $this->ReleaseResourceReference[] = $ref;
    }
    
    function getReleaseResourceReference(): array {
        return $this->ReleaseResourceReference;
    }

    function setReleaseResourceReference(array $ReleaseResourceReference): void {
        $this->ReleaseResourceReference = $ReleaseResourceReference;
    }

}
