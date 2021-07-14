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
class IndirectResourceContributor extends \DDEX\DDEXNode{
    
    const ROLE_COMPOSER = 'Composer';
    const ROLE_LYRICIST = 'Lyricist';
        const ROLE_ARRANGER = 'Arranger';


    /**
     * 
     * @var PartyName
     */
    public $PartyName;
    
    public $IndirectResourceContributorRole;
}
