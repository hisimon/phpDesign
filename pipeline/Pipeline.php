<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-2-10
 */
namespace modelDesign;

class Pipeline{
    
    private $stages = [];
    private $processor;
    
    public function __construct( array $stages = [], $processor=null ) {
        $this->stages = $stages;
        $this->processor = $processor ? $processor : new Processor;
    }
    
    public function  pipe( $stages ){
        $this->stages[] = $stages;
        return $this;
    }
    
    public function process( $params ){
        return $this->processor->process( $this->stages, $params );
    }
    
}
