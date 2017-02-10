<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-18
 */
class user extends baseDb{
    
    protected $_tbName = 'ttttt';
    protected $_primaryKey = 'id';
    
    public function getUser(){
        $sql = '';
        $this->fetch( $sql );
    }
    
}