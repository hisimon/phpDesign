<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-2-7
 */

include 'DI.php';
include 'service.php';

$di = new DI();
$di->set('test', function(){
   return new service();
});