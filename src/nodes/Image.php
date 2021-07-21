<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of Image
 *
 * @author darius
 */
class Image extends \DDEX\DDEXNode {

    const TYPE_FRONTCOVER = 'FrontCoverImage';
    const CODEC_JPEG = 'JPEG';

    public $ImageType;

    /**
     * 
     * @var ImageId
     */
    public $ImageId;
    public $ResourceReference;

    /**
     * 
     * @var ImageDetailsByTerritory
     */
    public $ImageDetailsByTerritory;

    function getImageType() {
        return $this->ImageType;
    }

    function getResourceReference() {
        return $this->ResourceReference;
    }

    function getImageId() {
        return $this->ImageId;
    }

    function getImageDetailsByTerritory(): ImageDetailsByTerritory {
        return $this->ImageDetailsByTerritory;
    }

    function setImageType($ImageType): void {
        $this->ImageType = $ImageType;
    }

    function setResourceReference($ResourceReference): void {
        $this->ResourceReference = $ResourceReference;
    }

    function setImageId($ImageId): void {
        $this->ImageId = $ImageId;
    }

    function setImageDetailsByTerritory(ImageDetailsByTerritory $ImageDetailsByTerritory): void {
        $this->ImageDetailsByTerritory = $ImageDetailsByTerritory;
    }

}
