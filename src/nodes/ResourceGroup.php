<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ResourceGroup
 *
 * @author darius
 */
class ResourceGroup extends \DDEX\DDEXNode{
    
    /**
     * 
     * @var Title
     */
    public $Title;
    
    /**
     * 
     * @var type
     */
    public $SequenceNumber;
    
    /**
     * 
     * @var ResourceGroupContentItem[]
     */
    public $ResourceGroupContentItem;
    
    /**
     * A ResourceGroup can have ResourceGroup inside
     * @var ResourceGroup[]
     */
    public $ResourceGroup;
    
    function __construct(string $title = NULL) {
        if($title){
            $Tit = new Title($title, Title::TYPE_GROUPING);
            $this->Title = $Tit;
        }
    }

    
    /**
     * 
     * @param ResourceGroupContentItem $item
     */
    public function addResourceGroupContentItem(ResourceGroupContentItem $item){
        
        if(!$this->ResourceGroupContentItem){
            $this->ResourceGroupContentItem = [];
        }
        
        $this->ResourceGroupContentItem[] = $item;
    }
    
    /**
     * A ResourceGroup can have ResourceGroup inside
     * 
     * @param ResourceGroup $res
     */
    function addResourceGroup(ResourceGroup $res){
        if(!$this->ResourceGroup){
            $this->ResourceGroup = [];
        }
        
        $this->ResourceGroup[] = $res;
    }
    
    function getTitle(): Title {
        return $this->Title;
    }

    function getSequenceNumber() {
        return $this->SequenceNumber;
    }

    function getResourceGroupContentItem() {
        return $this->ResourceGroupContentItem;
    }

    function setTitle(Title $Title) {
        $this->Title = $Title;
    }

    function setSequenceNumber($SequenceNumber) {
        $this->SequenceNumber = $SequenceNumber;
    }

    function setResourceGroupContentItem(array $ResourceGroupContentItem) {
        $this->ResourceGroupContentItem = $ResourceGroupContentItem;
    }
    
    function getResourceGroup() {
        return $this->ResourceGroup;
    }

    function setResourceGroup(array $ResourceGroup) {
        $this->ResourceGroup = $ResourceGroup;
    }


}
