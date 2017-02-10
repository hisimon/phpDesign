<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-1-22
 */
$band = 'aaaa';
$title = 'aaaa';
$price = 111;

$cd = new CD($title, $band, $price);
$cd ->buy();
$cd ->acceptVisitor( new CDVisitorLogPurchase() );
