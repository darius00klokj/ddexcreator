<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX\nodes;

/**
 * Description of ResourceList
 *
 * @author darius
 */
class ResourceList extends \DDEX\DDEXNode{
    
    /**
     * 
     * @var SoundRecording[]
     */
    public $SoundRecording;
    
    /**
     * 
     * @var Image
     */
    public $Image;
    
    function addSoundRecording(SoundRecording $sr){
        if(!$this->SoundRecording){
            $this->SoundRecording = [];
        }
        $this->SoundRecording[] = $sr;
    }
    
    function getImage(): Image {
        return $this->Image;
    }

    function getSoundRecording(): array {
        return $this->SoundRecording;
    }

    function setImage(Image $Image): void {
        $this->Image = $Image;
    }

    function setSoundRecording(array $SoundRecording): void {
        $this->SoundRecording = $SoundRecording;
    }

}
