<?php

/**
 * 
 * @version 2014-3-13
 * @author simon <drawhm@gmail.com>
 */

include_once 'base.php';
include_once 'instance.php';
include_once 'instance2.php';

$instance = instance::getInstance();
$instance2 = instance2::getInstance();

if( $instance instanceof base ){
   echo 1;
}
if( $instance instanceof instance ){
   echo 2;
}
if( $instance instanceof instance2 ){
   echo 3;
}
