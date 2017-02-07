<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-22
 */
class MixtapeCD extends cd {
    
    public function __clone() {
        $this->title = 'aaaaaaaaaaa';
    }
    
}