<?php

/**
 * 委托模式：
 * 目的是消除潜在的、难以控制的语句，例如if/else等
 * @author simon <drawi@163.com>
 * @version 2017-1-19
 */
$type = 'pls';


$oP = new playlist();
$oP ->addSong('/xxx/xxx/xx/aaa.mp3', 'is title');
$oP ->addSong('/xxx/xxx/xx/aaa2.mp3', 'is title2');

//没使用委托模式时的代码
if( $type == 'pls' ){
    $oP->getPLS();
}else{
    $oP->getM3U();
}

//基于委托模式的代码，可以简单、动态地创建和访问委托者
$oP = new newPlaylist($type);
$content = $oP ->getPlaylist();