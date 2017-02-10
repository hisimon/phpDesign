<?php

/**
 * 模板模式，无非就是一个抽象接口
 * @author simon <drawi@163.com>
 * @version 2017-1-22
 */
class CD extends SaleItemTemplate{
    public $band = '';
    public $title = '';
    
    public function __construct( $title, $band, $price ) {
        $this->title = $title;
        $this->band = $band;
    }
    
    public function taxAddtion(){
        return round( $this->price * .05,2 );
    }
    
}