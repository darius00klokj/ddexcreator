<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of Release
 * 
 * 
  <Release IsMainRelease="true">



 * @author darius
 */
class Release extends \DDEX\DDEXNode {

    const TYPE_EP = 'EP';
    const TYPE_ALBUM = 'album';
    const TYPE_COMPILATION = 'compilation';
    const TYPE_SINGLE = 'single';
    
    /**
     * 
     * @var ReleaseId
     */
    public $ReleaseId;
    public $ReleaseReference;

    /**
     * 
     * @var ReferenceTitle;
     */
    public $ReferenceTitle;

    /**
     * 
     * @var ReleaseResourceReferenceList
     */
    public $ReleaseResourceReferenceList;

    /**
     * UserDefinedValue="EP"
     * @var \DDEX\DDEXSingleNode
     */
    public $ReleaseType;

    /**
     * 
     * @var ReleaseDetailsByTerritory[]
     */
    public $ReleaseDetailsByTerritory;

    /**
     * 
     * @var PLine
     */
    public $PLine;

    /**
     * 
     * @var CLine
     */
    public $CLine;

    function __construct($title, $type, $isMain = true) {
        
        $this->setReferenceTitle(new ReferenceTitle($title));
        $this->addAttr('IsMainRelease', $isMain ? 'true' : 'false');
        
        $ReleaseType = new \DDEX\DDEXSingleNode('ReleaseType', $type);
        $ReleaseType->addAttribute('UserDefinedValue', $type);
    }
    
    function addReleaseDetailsByTerritory(ReleaseDetailsByTerritory $ReleaseDetailsByTerritory){
        if(!$this->ReleaseDetailsByTerritory){
            $this->ReleaseDetailsByTerritory = [];
        }
        $this->ReleaseDetailsByTerritory[] = $ReleaseDetailsByTerritory;
    }

    function getReleaseId(): ReleaseId {
        return $this->ReleaseId;
    }

    function getReleaseReference() {
        return $this->ReleaseReference;
    }

    function getReferenceTitle() {
        return $this->ReferenceTitle;
    }

    function getReleaseType(): \DDEX\DDEXSingleNode {
        return $this->ReleaseType;
    }

    function getReleaseDetailsByTerritory(): array {
        return $this->ReleaseDetailsByTerritory;
    }

    function getPLine(): PLine {
        return $this->PLine;
    }

    function setReleaseId(ReleaseId $ReleaseId): void {
        $this->ReleaseId = $ReleaseId;
    }

    function setReleaseReference($ReleaseReference): void {
        $this->ReleaseReference = $ReleaseReference;
    }

    function setReferenceTitle(ReferenceTitle $ReferenceTitle): void {
        $this->ReferenceTitle = $ReferenceTitle;
    }

    function setReleaseType(\DDEX\DDEXSingleNode $ReleaseType): void {
        $this->ReleaseType = $ReleaseType;
    }

    function setReleaseDetailsByTerritory(array $ReleaseDetailsByTerritory): void {
        $this->ReleaseDetailsByTerritory = $ReleaseDetailsByTerritory;
    }

    function setPLine(PLine $PLine): void {
        $this->PLine = $PLine;
    }

    function getReleaseResourceReferenceList(): ReleaseResourceReferenceList {
        return $this->ReleaseResourceReferenceList;
    }

    function setReleaseResourceReferenceList(ReleaseResourceReferenceList $ReleaseResourceReferenceList): void {
        $this->ReleaseResourceReferenceList = $ReleaseResourceReferenceList;
    }
    
    function getCLine(): CLine {
        return $this->CLine;
    }

    function setCLine(CLine $CLine): void {
        $this->CLine = $CLine;
    }

}
