<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-19
 */
class webserviceFacade{
    
    public static function makeXmlCall( cd $cd ){
        cdUpperCase::makeString( $cd, 'title' );
        cdUpperCase::makeString( $cd, 'band' );
        cdUpperCase::makeArray( $cd, 'tracks' );
        return cdMakeXml::create($cd);
    }
    
}