<?php

/**
 * 
 * @version 2014-3-7
 * @author simon <drawhm@gmail.com>
 */

class logToConsole{
  private $_errorObject;
  
  public function __construct( $errorObject ) {
    $this->_errorObject = $errorObject;
  }
  
  public function write(){
      print_r($this->_errorObject ->getError());
  }
}


