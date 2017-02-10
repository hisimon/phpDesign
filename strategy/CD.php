<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-22
 */
class CD{
    public $band = '';
    public $title = '';
    
    public function __construct($title,$band) {
        $this->title = $title;
        $this->band = $band;
    }
    
    public function getAsXml(){
        
    }
}