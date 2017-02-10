<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
$tracks = array('what is means', 'brrr','goodbye');
$title = 'this is title';
$band = 'this is band';

$cd = new cd();
$cd->setBand($band);
$cd->setTitle($title);
foreach( $tracks as $track ){
    $cd->addTrack($track);
}


//使用工厂类
$type = 'enhanced';

$cd = cdFactory::create($type);
$cd->setBand($band);
$cd->setTitle($title);
foreach( $tracks as $track ){
    $cd->addTrack($track);
}