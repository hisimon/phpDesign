<?php

/**
 * 管道模式
 * @author huangmin <huangmin@3k.com>
 * @version 2017-2-10
 */
require 'Pipeline.php';
require 'Processor.php';
require 'TwoStage.php';
require 'OneStage.php';

use modelDesign\Pipeline;
use modelDesign\TwoStage;
use modelDesign\OneStage;

//$pipeline = (new Pipeline)->pipe(function ($payload) {
//    return $payload * 10;
//});
//echo $pipeline->process(10);
//exit;

$pipeline = (new Pipeline)
    ->pipe(new TwoStage)
    ->pipe(new OneStage);

// Returns 21
echo $pipeline->process(10);
exit;
