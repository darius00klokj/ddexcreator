<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ReleaseDetailsByTerritory
 * 
 * @author darius
 */
class ReleaseDetailsByTerritory extends \DDEX\DDEXNode{
    //put your code here
    
    public $TerritoryCode;
    public $DisplayArtistName;
    
    /**
     * LabelNameType="DisplayLabelName"
     * @var \DDEX\DDEXSingleNode
     */
    public $LabelName;
    
    /**
     * 
     * @var Title[]
     */
    public $Title;
    
    /**
     * 
     * @var DisplayArtist[]
     */
    public $DisplayArtist;
    
    public $ParentalWarningType;
    
    /**
     * 
     * @var ResourceGroup[]
     */
    public $ResourceGroup;
    
    /**
     * 
     * @var Genre
     */
    public $Genre;
    
    public $ReleaseDate;
    
    function addDisplayArtist(DisplayArtist $art){
        if(!$this->DisplayArtist){
            $this->DisplayArtist = [];
        }
        
        $this->DisplayArtist[] = $art;
    }
    
    function addResourceGroup(ResourceGroup $res){
        if(!$this->ResourceGroup){
            $this->ResourceGroup = [];
        }
        
        $this->ResourceGroup[] = $res;
    }
    
    function addTitle(Title $title){
        if(!$this->Title){
            $this->Title = [];
        }
        
        $this->Title[] = $title;
    }
    
    function getTerritoryCode() {
        return $this->TerritoryCode;
    }

    function getDisplayArtistName() {
        return $this->DisplayArtistName;
    }

    function getLabelName(): \DDEX\DDEXSingleNode {
        return $this->LabelName;
    }

    function getDisplayArtist(): array {
        return $this->DisplayArtist;
    }

    function getParentalWarningType() {
        return $this->ParentalWarningType;
    }

    function getResourceGroup(): array {
        return $this->ResourceGroup;
    }

    function getGenre(): Genre {
        return $this->Genre;
    }

    function getReleaseDate() {
        return $this->ReleaseDate;
    }

    function setTerritoryCode($TerritoryCode): void {
        $this->TerritoryCode = $TerritoryCode;
    }

    function setDisplayArtistName($DisplayArtistName): void {
        $this->DisplayArtistName = $DisplayArtistName;
    }

    function setLabelName(\DDEX\DDEXSingleNode $LabelName): void {
        $this->LabelName = $LabelName;
    }

    function setDisplayArtist(array $DisplayArtist): void {
        $this->DisplayArtist = $DisplayArtist;
    }

    function setParentalWarningType($ParentalWarningType): void {
        $this->ParentalWarningType = $ParentalWarningType;
    }

    function setResourceGroup(array $ResourceGroup): void {
        $this->ResourceGroup = $ResourceGroup;
    }

    function setGenre(Genre $Genre): void {
        $this->Genre = $Genre;
    }

    function setReleaseDate($ReleaseDate): void {
        $this->ReleaseDate = $ReleaseDate;
    }

}
