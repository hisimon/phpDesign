<?php

/**
 * 原型设计模式：
 * 复制和克隆初始对象或原型，这种方式比创建新实例更为有效
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-22
 */
$id = 11;
$bandMixProto = new MixtapeCD($id);

$a = array();
$a[] = array( 'brrr', 'ssdfasdf');
$a[] = array( 'brrr2', 'ssdfasdf');
foreach( $a as $mixed ){
    $cd = clone $bandMixProto;
    $cd->trackList = $mixed;
    $cd->buy();
}