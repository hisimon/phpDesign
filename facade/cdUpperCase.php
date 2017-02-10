<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-19
 */
class cdUpperCase{
    
    public static function makeString(cd $cd, $type ){
        $cd->$type = strtoupper( $cd->$type );
        
    }
    
    public static function makeArray(cd $cd, $type ){
        $cd->$type = array_map( 'strtoupper', $cd->$type );
        
    }
    
}