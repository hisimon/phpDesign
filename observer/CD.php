<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-22
 */
class CD{
    
    public $title = '';
    public $band = '';
    protected $_observer = array();
    
    public function __construct($title,$band) {
        $this->title = $title;
        $this->band = $band;
    }
    
    public function attachObserver( $type, $observer ){
        $this->_observer[$type] = $observer;
    }
    
    public function notifyObserver( $type ){
        if( isset( $this->_observer[$type] ) ){
            foreach( $this->_observer as $observer ){
                $observer->update( $this );
            }
        }
    }
    
    public function buy(){
        //其他操作代码
        
        //然后
        $this->notifyObserver('purchased');
    }
    

}