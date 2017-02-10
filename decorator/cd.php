<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-18
 */
class cd{
    
    public $trackList;
    public function __construct() {
        $this->trackList=array();
    }
    
    public function addTrack( $track ){
        $this->trackList[] = $track;
    }
    
    public function getTrack(){
        
        $re = '';
        foreach( $this->trackList as $k => $v ){
            $re .= ( $k+1 ) .") {$v}. ";
        }
        return $re;
    }
    
}