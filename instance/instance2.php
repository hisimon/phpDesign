<?php

/**
 * 
 * @version 2014-3-13
 * @author huangm <drawhm@gmail.com>
 */

class instance2 extends base{
    protected static $_instance = null;
    
    public function __construct() {
        parent::__construct();
    }
    
    public static function getInstance(){
        if( !self::$_instance instanceof self ){
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    
}

