<?php

/**
 * 
 * @version 2014-3-7
 * @author huangm <drawhm@gmail.com>
 */
class logToCSV{
  
  const CSV_LOCATION = 'log.csv';
  private $_errorObject;
  
  public function __construct( $errorObject ) {
    $this->_errorObject = $errorObject;
  }
  
  //不同于logToConsole.php中的write，此时就要做个适配器
  public function write(){
    $line = $this->_errorObject->getErrorNumber();
    $line .= $this->_errorObject->getErrorText();
    print_r($line);
  }
}


