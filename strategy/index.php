<?php

/**
 * 策略模式：
 * 策略模式帮助构建的对象不必自包含逻辑，而是能够根据需要利用其他对象中的算法
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-22
 */

//原始需求只有返回xml格式的，后来需要返回json的格式 
$band = 'dddddddddd';
$title = 'dddddddddd';

$cd = new CD($title,$band);
echo $cd->getAsXml();

//使用策略模式后的改进
$cd = new CDuserStrategy($title,$band);
$cd->setStrategy( new CDAsXMLStrategy() );
echo $cd->get();

$cd = new CDuserStrategy($title,$band);
$cd->setStrategy( new CDAsJSONStrategy() );
echo $cd->get();




