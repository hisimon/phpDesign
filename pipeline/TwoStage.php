<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-2-10
 * 
 */
namespace modelDesign;

class TwoStage {

    public function __invoke( $payload ) {
        return $payload * 2;
    }

}
