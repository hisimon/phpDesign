<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
class enhancedCD{
    
    public $title = '';
    public $band = '';
    public $trackList=array();
    public function __construct() {
        $this->trackList[] = 'dddddddddddddd';
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