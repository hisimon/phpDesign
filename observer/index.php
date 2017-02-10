<?php

/**
 * 观察者模式：
 * 观察者设计模式能够更便利地创建查看目标对象状态的对象，并且提供与核心对象非耦合
 * 的指定功能
 * @author simon <drawi@163.com>
 * @version 2017-1-22
 */
$title = 'sadfasdf';
$band = 'bbbbb';
$cd = new CD($title, $band);
$observer = new buyCDNotifyStreamObserver();
$cd ->attachObserver('purchased', $observer);//添加观察者
$cd->buy();//然后才执行


