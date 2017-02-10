<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-2-10
 * 
 */
namespace modelDesign;

class TwoStage {

    public function __invoke( $payload ) {
        return $payload * 2;
    }

}
