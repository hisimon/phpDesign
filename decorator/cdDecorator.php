<?php

/**
 * 装饰器
 * @author simon <drawi@163.com>
 * @version 2017-1-18
 */
class cdDecorator{
    
    private $_objCd;
    
    public function __construct( cd $cd ) {
        $this->_objCd = $cd;
    }
    
    public function makeCaps(){
        foreach( $this->_objCd->trackList as &$track ){
            $track = strtoupper( $track );
        }
        
    }
    
}