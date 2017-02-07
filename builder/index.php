<?php

/**
 * 建造者模式：
 * 建造者模式目的是消除其他对象的复杂创建过程
 * 建造煮productBuilder中通过build方法，把type、size、color建造起来
 * 说白了就是属性封装在一起
 * @author huangmin <huangmin@3k.com>
 * @version 2017-1-18
 */
include_once 'product.php';
include_once 'productBuilder.php';

$config = array( 'type' => 'shirt', 'size'=> 'XL', 'color'=>'red' );
$product = new product();
$product ->setType( $config['type'] );
$product ->setSize( $config['size'] );
$product ->setColor( $config['color'] );


$builder = new productBuilder( $config );
$builder->build();
$product = $builder->getProduct();






