<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-22
 */

class CD{
    public $band = '';
    public $title = '';
    public $_handle = null;
    
    public function __construct($title,$band) {
        $this->title = $title;
        $this->band = $band;
    }
    
    public function buy(){
        $this->_connect();
        //do buy
        
    }
    
    protected function _connect(){
        $this->_handle = mysql_connect();//连接本地的
    }
    
}