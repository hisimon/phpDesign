<?php

/**
 * logToCSV的适配器
 * @version 2014-3-7
 * @author simon <drawhm@gmail.com>
 */

class logToCSVAdapter extends errorObject{
  private $_errorNumber, $_errorText;
  
  public function __construct( $error ) {
    parent::__construct( $error );
    $parts = explode(':', $this->getError() );
    $this->_errorNumber = $parts[0];
    $this->_errorText = $parts[1];
    
  }
  
  public function getErrorNumber() {
    return $this->_errorNumber;
  }
  public function getErrorText() {
    return $this->_errorText;
  }
  
}

