<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-20
 */
class cdFactory{
    public static function create( $type ){
        $class = strtolower( $type ) .'CD';
        return new $class;
        
    }
    
}