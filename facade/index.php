<?php

/**
 * 外观模式（门面）：
 * 外观设计模式的目标是控制外部错综复杂的关系，并且提供简单的接口以利用上述组件的能力
 * 医院的例子
首先病人必须先挂号，然后门诊。如果医生要求化验，病人必须首先划价，然后缴款，才能到化验部门做化验。化验后，再回到门诊室。
解决这种不便的方法便是引进门面模式。可以设置一个接待员的位置，由接待员负责代为挂号、划价、缴费、取药等。这个接待员就是门面模式的体现，病人只接触接待员，由接待员负责与医院的各个部门打交道。
什么是门面模式
门面模式要求一个子系统的外部与其内部的通信必须通过一个统一的门面(Facade)对象进行
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-19
 */
include_once 'cd.php';
include_once 'cdUpperCase.php';
include_once 'cdMakeXml.php';
include_once 'webserviceFacade.php';

//原始的
$tracks = array('what is means', 'brrr','goodbye');
$title = 'this is title';
$band = 'this is band';

$cd = new cd($title, $band, $tracks);
cdUpperCase::makeString( $cd, 'title' );
cdUpperCase::makeString( $cd, 'band' );
cdUpperCase::makeArray( $cd, 'tracks' );
echo cdMakeXml::create($cd);

//应当针对具体的web服务调用创建一个facade对象，使用外观模式
//以下代码是封装了make xml所需要的一些功能节点（复杂逻辑），提供一个门面接口makeXmlCall
webserviceFacade::makeXmlCall($cd);
