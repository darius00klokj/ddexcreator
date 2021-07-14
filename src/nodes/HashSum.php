<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of HashSum
 *
 * @author darius
 */
class HashSum extends \DDEX\DDEXNode{
    public $HashSum;
    public $HashSumAlgorithmType;
    
    function __construct($HashSum, $HashSumAlgorithmType) {
        $this->HashSum = $HashSum;
        $this->HashSumAlgorithmType = $HashSumAlgorithmType;
    }

    function getHashSum() {
        return $this->HashSum;
    }

    function getHashSumAlgorithmType() {
        return $this->HashSumAlgorithmType;
    }

    function setHashSum($HashSum): void {
        $this->HashSum = $HashSum;
    }

    function setHashSumAlgorithmType($HashSumAlgorithmType): void {
        $this->HashSumAlgorithmType = $HashSumAlgorithmType;
    }


}
