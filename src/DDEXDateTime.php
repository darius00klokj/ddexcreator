<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX;

/**
 * Description of DDEXDateTime
 *
 * @author darius
 */
class DDEXDateTime {
   
    /**
     * 
     * @var float
     */
    private $time;
    
    function __construct(int $time = NULL) {
        $this->time = $time;
    }
    
    function getAsString(){
        
        $time = $this->time ? $this->time : time();
        
        $date = date('Y-m-d', $time);
        $hour = date('H:i:sP', $time);
        
        return sprintf('%sT%s', $date, $hour);
    }

}