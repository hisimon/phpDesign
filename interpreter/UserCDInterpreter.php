<?php

/**
 * 解释器
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
class UserCDInterpreter{
    protected $_user = null;
    
    public function setUser( $user ){
        $this->_user = $user;
        
    }
    
    
    public function getInterpreted(){
        //获取页面
        $profile = $this->_user->getProfilePage();
        
        //解析
        if( preg_match_all( '/\{\{myCD\.(.*?)\}\}/',$profile,$triggers, PREG_SET_ORDER)){
            $replacements = array();
            
            foreach( $triggers as $trigger ){
                $replacements[] =$trigger[1];
            }
            
            $replacements = array_unique($replacements);
            
            $myCD = new UserCD();
            $myCD->setUser($this->_user);
            
            foreach( $replacements as $replacement ){
                $data = call_user_func( array($myCD, $replacement) );
                $profile = str_replace("{{myCD.{$replacement}}}", $data, $profile );
                
            }
            
        }
        return $profile;
    }
    
    
    
}