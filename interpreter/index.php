<?php

/**
 * 解释器模式：
 * 解释器设计模式用于分析一个实体的关键元素，并且针对每个元素都提供自己的解释或相应的动作
 * @author simon <drawi@163.com>
 * @version 2017-1-20
 */
include_once 'User.php';
include_once 'UserCD.php';
include_once 'UserCDInterpreter.php';
$username = 'testttt';

$user = new User( $username );
$interpreter = new UserCDInterpreter();
$interpreter->setUser($user);

print "<h1>{$username}'s profile</h1>";
print $interpreter->getInterpreted();





