<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
class MusiccontainerMediator{
    protected $_container = array();
    
    public function __construct() {
        $this->_container[] = 'CD';
        $this->_container[] = 'Mp3Archive';
    }
    
    public function change( $originalObject, $newValue ){
        $title = $originalObject->title;
        $band = $originalObject->band;
        foreach( $this->_container as $container ){
            if( !( $originalObject instanceof $container ) ){
                $object = new $container;
                $object->title = $title;
                $object->band = $band;
                
                foreach( $newValue as $k=>$v ){
                    $object->$k = $v;
                }
                
                $object->save();
                
            }
            
            
        }
        
        
    }
    
    
}