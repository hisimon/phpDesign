<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-2-10
 */

namespace modelDesign;

class Processor{
    
    public function process( array $stages, $params ){
        foreach( $stages as $stage ){
            $params = call_user_func( $stage, $params );//参数一步步传递执行，返回最后的值
        }
        return $params;
    }
    
}