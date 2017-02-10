<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-18
 */
class productBuilder{
    
    protected $_product = null;
    protected $_configs = array();
    
    public function __construct( $configs ) {
        $this->_product = new product();
        $this->_configs = $configs;
    }
    
    public function build(){
        $this->_product->setColor( $this->_configs['color'] );
        $this->_product->setType( $this->_configs['type'] );
        $this->_product->setSize( $this->_configs['size'] );
    }
    
    public function getProduct(){
        return $this->_product;
    }
    
    
}