<?php

namespace DDEX\nodes;

/**
 *
 * @author darius
 */
class File {
    
    /**
     * Just the file name
     * 
     * @var string 
     */
    public $FileName;
    
    /**
     * folder withing FTP where its located without the filename
     * @var string
     */
    public $FilePath;
    
    /**
     * 
     * @var HashSum
     */
    public $HashSum;
    
    function __construct($FileName, $FilePath) {
        $this->FileName = $FileName;
        $this->FilePath = $FilePath;
    }

    function getFileName() {
        return $this->FileName;
    }

    function getFilePath() {
        return $this->FilePath;
    }

    function getHashSum(): HashSum {
        return $this->HashSum;
    }

    function setFileName($FileName): void {
        $this->FileName = $FileName;
    }

    function setFilePath($FilePath): void {
        $this->FilePath = $FilePath;
    }

    function setHashSum(HashSum $HashSum): void {
        $this->HashSum = $HashSum;
    }


}
