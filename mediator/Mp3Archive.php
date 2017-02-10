<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
class Mp3Archive{
    public $band = '';
    public $title='';
    protected $_mediator;
    
    public function __construct($mediator=null) {
        $this->_mediator = $mediator;
    }
    
    public function save(){

    }
    
    public function changeBandName($newName){
        if( !is_null( $this->_mediator ) ) {
            $this->_mediator->change( $this, array('band'=>$newName) );
        }
        
        $this->band = $newName;
        $this->save();
    }
    
    
    
}