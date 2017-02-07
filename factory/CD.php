<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-20
 */
class CD{
    
    public $title = '';
    public $band = '';
    public $trackList=array();
    public function __construct() {
    }
    
    public function addTrack( $track ){
        $this->trackList[] = $track;
    }
    
    public function setTitle($title){
        $this->title = $title;
    }
    
    public function setBand($band){
        $this->band = $band;
    }
    
    

}