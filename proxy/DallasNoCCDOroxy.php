<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-22
 */
class DallasNoCCDOroxy extends CD{
    
    //代理到其他服务器
    protected function _connect(){
        $this->_handle = mysql_connect();//连接其他服务器
    }
}