<?php

/**
 * 数据访问对象模式：
 * 其实就是把数据库的一些操作封装起来
 * @author simon <drawi@163.com>
 * @version 2017-1-18
 */
abstract class baseDb{
    
    private $_connection;
    
    public function __construct() {
        $this->connect();
    }
    
    private function connect(){
        
    }
    
    public function fetch(){
        
    }
    
    public function insert(){
        
    }
    
}