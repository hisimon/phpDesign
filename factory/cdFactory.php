<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
class cdFactory{
    public static function create( $type ){
        $class = strtolower( $type ) .'CD';
        return new $class;
        
    }
    
}