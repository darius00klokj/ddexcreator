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
        //$date = date('YYYY-MM-DD\TH:i:sTZD', $time);
        $date = date("Y-m-d\TH:i:s.000000", $time);
        return $date;
    }

}
