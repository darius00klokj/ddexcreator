<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of Genre
 *
 * @author darius
 */
class Genre extends \DDEX\DDEXNode{
    
    const KPOP = 'K-Pop';
    const HIPHOP = 'Hip Hop';
    const ALTERNATIVE = 'Alternative';
    
    public $GenreText;
    public $SubGenre;
    
    function __construct($GenreText, $SubGenre = NULL) {
        $this->GenreText = $GenreText;
        $this->SubGenre = $SubGenre;
    }

    
    function getGenreText() {
        return $this->GenreText;
    }

    function getSubGenre() {
        return $this->SubGenre;
    }

    function setGenreText($GenreText): void {
        $this->GenreText = $GenreText;
    }

    function setSubGenre($SubGenre): void {
        $this->SubGenre = $SubGenre;
    }


}
