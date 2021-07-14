<?php

namespace DDEX\nodes;

/**
 * Description of TechnicalImageDetails
 *
 * @author darius
 */
class TechnicalImageDetails extends \DDEX\DDEXNode{
    
    public $TechnicalResourceDetailsReference;
    public $ImageCodecType;
    public $ImageHeight;
    public $ImageWidth;
    
    /**
     * 
     * @var File
     */
    public $File;
    
    function getTechnicalResourceDetailsReference() {
        return $this->TechnicalResourceDetailsReference;
    }

    function getImageCodecType() {
        return $this->ImageCodecType;
    }

    function getImageHeight() {
        return $this->ImageHeight;
    }

    function getImageWidth() {
        return $this->ImageWidth;
    }

    function getFile(): File {
        return $this->File;
    }

    function setTechnicalResourceDetailsReference($TechnicalResourceDetailsReference): void {
        $this->TechnicalResourceDetailsReference = $TechnicalResourceDetailsReference;
    }

    function setImageCodecType($ImageCodecType): void {
        $this->ImageCodecType = $ImageCodecType;
    }

    function setImageHeight($ImageHeight): void {
        $this->ImageHeight = $ImageHeight;
    }

    function setImageWidth($ImageWidth): void {
        $this->ImageWidth = $ImageWidth;
    }

    function setFile(File $File): void {
        $this->File = $File;
    }

}
