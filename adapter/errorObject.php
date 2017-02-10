<?php

/**
 * 
 * @version 2014-3-7
 * @author simon <drawhm@gmail.com>
 */
class errorObject{
  private $_error;
  
  public function __construct( $error ) {
    $this->_error = $error;
  }
  
  public function getError(){
    return $this->_error;
  }
}


