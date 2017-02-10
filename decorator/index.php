<?php

/**
 * 装饰器模式：
 * 原始的需求返回的是小写，代码段1已经可以满足，但是后来需求改了，要求返回的都要大写
 * 在不修改对象原有结构的前提下，对现在的功能进行修改，于是就有了装饰器模式
 * 注意引用（&）的作用
 * @author simon <drawi@163.com>
 * @version 2017-1-18
 */

include_once 'cd.php';
include_once 'cdDecorator.php';

$aA = array('what is xxxx','simonn','goodbye');

//==================代码段1===========
$myCd = new cd();
foreach( $aA as $track ){
    $myCd->addTrack($track);
}
$a = $myCd->getTrack();
print_r($a);
//==================代码段1 end===========


//==================代码段2===========
$myCd = new cd();
foreach( $aA as $track ){
    $myCd->addTrack($track);
}

//对$myCd进行装饰
$oCdDecorator = new cdDecorator( $myCd );
$oCdDecorator->makeCaps();

$a = $myCd->getTrack();
print_r($a);
//==================代码段2 end===========

