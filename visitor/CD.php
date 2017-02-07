<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-22
 */
class CD{
    public $band = '';
    public $title = '';
    
    public function __construct( $title, $band, $price ) {
        $this->title = $title;
        $this->band = $band;
    }
    
    public function buy(){
        
    }
    
    public function acceptVisitor( $visitor ){
        $visitor->visitCD( $this );
    }
    
}