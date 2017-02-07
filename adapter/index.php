<?php

/**
 * 适配器模式：
 * 旧需求logToConsole.php，新需求logToCSV.php
 * 新需求logToCSV.php中的write不同于logToConsole.php中的write，
 * 要求把错误信息中的number和text分开。
 * 所以做个适配器logToCSVAdapter.php
 * 增加两个方法getErrorNumber和getErrorText
 * @version 2014-3-7
 * @author huangm <drawhm@gmail.com>
 */

include_once 'errorObject.php';
include_once 'logToConsole.php';
include_once 'logToCSV.php';
include_once 'logToCSVAdapter.php';

//不用适配器时可以这样用
$error = new errorObject('404:Not Fount');
$log = new logToConsole($error);
$log->write();


//加了适配器后就要这样
$error = new logToCSVAdapter('404:Not Fount');
$log = new logToCSV($error);
$log->write();






