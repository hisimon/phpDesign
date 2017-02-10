<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
class User{
    
    protected $_username = '';
    
    public function __construct( $username ) {
        $this->_username = $username;
    }
    
    public function getProfilePage(){
        $profile = '<h2>i like never again</h2>';
        $profile .= 'i love all of their songs. my favorite cd:<br>';
        $profile .= "{{myCD.getTitle}}!!";
        return $profile;
        
    }
    
}