<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-22
 */
class CDuserStrategy{
    
    public $band = '';
    public $title = '';
    protected $_strategy;


    public function __construct($title,$band) {
        $this->title = $title;
        $this->band = $band;
    }
    
    public function setStrategy( $strategy ){
        $this->_strategy= $_strategy;
    }
    
    public function get(){
        $this->_strategy->get( $this );
    }
    
    
    
}