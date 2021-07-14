<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of SoundRecordingDetailsByTerritory
 *
 * @author darius
 */
class SoundRecordingDetailsByTerritory {
    
    public $TerritoryCode;
    
    /**
     * 
     * @var Title[]
     */
    public $Title;
    
    /**
     * 
     * @var DisplayArtist
     */
    public $DisplayArtist;
    
    /**
     * 
     * @var IndirectResourceContributor[]
     */
    public $IndirectResourceContributor;
    
    /**
     * LabelNameType="DisplayLabelName"
     * @var \DDEX\DDEXSingleNode
     */
    public $LabelName;
    
    /**
     * 
     * @var PLine
     */
    public $PLine;
    
    /**
     * 
     * @var Genre
     */
    public $Genre;
    
    public $ParentalWarningType;
    
    /**
     * 
     * @var File
     */
    public $File;
    
    function __construct($TerritoryCode) {
        $this->TerritoryCode = $TerritoryCode;
    }

    function getTerritoryCode() {
        return $this->TerritoryCode;
    }

    function getTitle(): array {
        return $this->Title;
    }

    function getDisplayArtist(): DisplayArtist {
        return $this->DisplayArtist;
    }

    function getIndirectResourceContributor(): array {
        return $this->IndirectResourceContributor;
    }

    function getLabelName(): \DDEX\DDEXSingleNode {
        return $this->LabelName;
    }

    function getPLine(): PLine {
        return $this->PLine;
    }

    function getGenre(): Genre {
        return $this->Genre;
    }

    function getParentalWarningType() {
        return $this->ParentalWarningType;
    }

    function getFile(): File {
        return $this->File;
    }

    function setTerritoryCode($TerritoryCode): void {
        $this->TerritoryCode = $TerritoryCode;
    }

    function setTitle(array $Title): void {
        $this->Title = $Title;
    }

    function setDisplayArtist(DisplayArtist $DisplayArtist): void {
        $this->DisplayArtist = $DisplayArtist;
    }

    function setIndirectResourceContributor(array $IndirectResourceContributor): void {
        $this->IndirectResourceContributor = $IndirectResourceContributor;
    }

    function setLabelName(\DDEX\DDEXSingleNode $LabelName): void {
        $this->LabelName = $LabelName;
    }

    function setPLine(PLine $PLine): void {
        $this->PLine = $PLine;
    }

    function setGenre(Genre $Genre): void {
        $this->Genre = $Genre;
    }

    function setParentalWarningType($ParentalWarningType): void {
        $this->ParentalWarningType = $ParentalWarningType;
    }

    function setFile(File $File): void {
        $this->File = $File;
    }


    
    
}
