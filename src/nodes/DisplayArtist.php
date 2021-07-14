<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of DisplayArtist
 *<DisplayArtist SequenceNumber="1">
  <PartyName>
  <FullName>DUT2</FullName>
  </PartyName>
  <ArtistRole>MainArtist</ArtistRole>
  </DisplayArtist>
  
 * @author darius
 */
class DisplayArtist  extends \DDEX\DDEXNode{
    //put your code here
    
    const ROLE_MAIN = 'MainArtist';
    const ROLE_FEATURED = 'FeaturedArtist';
    
    /**
     * 
     * @var PartyName
     */
    public $PartyName;
    public $ArtistRole;
    
    function __construct($PartyName, $ArtistRole, $sequenceNumber = 0) {
        
        $pname = new PartyName($PartyName);
        
        $this->PartyName = $pname;
        $this->ArtistRole = $ArtistRole;
        
        if($sequenceNumber){
            $this->addAttr('SequenceNumber', $sequenceNumber);
        }
    }

    function getPartyName(): PartyName {
        return $this->PartyName;
    }

    function getArtistRole() {
        return $this->ArtistRole;
    }

    function setPartyName(PartyName $PartyName): void {
        $this->PartyName = $PartyName;
    }

    function setArtistRole($ArtistRole): void {
        $this->ArtistRole = $ArtistRole;
    }

}
