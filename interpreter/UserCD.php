<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
class UserCD{
    
    protected $_user = null;
    
    public function setUser( $user ){
        $this->_user = $user;
        
    }
    
    public function getTitle(){
        $title = 'waste of test';
        return $title;
    }
    
}