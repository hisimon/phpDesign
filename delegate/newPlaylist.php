<?php

/**
 *
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-19
 */
class newPlaylist{
    private $_songs;
    private $_typeObj;
    
    public function __construct( $type ) {
        $this->_songs = array();
        $obj = "{$type}Playlist";
        $this->_typeObj = new $obj;
    }
    
    public function addSong( $dir, $title ){
        
    }
    
    public function getPlaylist(){
        return $this->_typeObj->getPlaylist($this->_songs);
    }

    
}