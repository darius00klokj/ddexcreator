<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of IndirectResourceContributor
 *
 * @author darius
 */
class IndirectResourceContributor extends \DDEX\DDEXNode {

    const ROLE_COMPOSER = 'Composer';
    const ROLE_LYRICIST = 'Lyricist';
    const ROLE_ARRANGER = 'Arranger';
    const ROLE_PUBLISHER = 'Publisher';
    const ROLE_PRODUCER = 'Producer';

    /**
     * 
     * @var PartyName
     */
    public $PartyName;
    
    /**
     * 
     * @var string
     */
    public $IndirectResourceContributorRole;
    
    function __construct($name, $role) {
        
        $pn = new PartyName($name);
        $this->PartyName = $pn;
        $this->IndirectResourceContributorRole = $role;
        
    }

    
    function getPartyName(): PartyName {
        return $this->PartyName;
    }

    function getIndirectResourceContributorRole(): string {
        return $this->IndirectResourceContributorRole;
    }

    function setPartyName(PartyName $PartyName): void {
        $this->PartyName = $PartyName;
    }

    function setIndirectResourceContributorRole(string $IndirectResourceContributorRole): void {
        $this->IndirectResourceContributorRole = $IndirectResourceContributorRole;
    }



}
