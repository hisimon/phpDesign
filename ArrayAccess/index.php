<?php

/**
 *
 * @author simon <drawi@163.com>
 * @version 2017-2-7
 */
include 'Config.php';

$config = new Config( dirname(__FILE__) . '/configs' );

$db = $config['db'];

print_r($db);
