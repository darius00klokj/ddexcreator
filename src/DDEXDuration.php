<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX;

/**
 * Description of DDEXDuration
 *
 * @author darius
 */
class DDEXDuration {
    
    private $duration;
    
    function __construct($duration) {
        $this->duration = $duration;
    }
    
    function getDuration() {
        return $this->duration;
    }

    function setDuration($duration): void {
        $this->duration = $duration;
    }
    
    /**
     * PT02M48S
     */
    function getAsString(){
        
        $model = 'PT%sM%sS';
        
        $minutes = floor($this->duration / 60); 
        $secs = $this->duration % 60; 
        
        return sprintf($model, $minutes, $secs);
        
    }
    


}
