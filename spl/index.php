<?php

/**
 * 
 * @version 2014-3-10
 * @author huangm <drawhm@gmail.com>
 */


//include_once 'spl.php';
//// Create iterator object
//$colors = new ArrayReloaded(array ('red','green','blue',));
//// Display the keys as well
//foreach ( $colors as $key => $color ) {
// echo "$key: $color<br>";
//}


//==========================================
include_once 'Article.php';
//// Create the object
//$A = new Article('SPL Rocks','Joe Bloggs', 'PHP');
//// Check what it looks like
//print_r($A);
//echo "<br>";
//// Change the title using array syntax
//$A['title'] = 'SPL _really_ rocks';
//$A['notfound'] = 1;
//unset($A['author']);
//
//// Check what it looks like again
//print_r($A);


//==========================================
include_once 'Article2.php';
$A = new Article2('SPL Rocks','Joe Bloggs', 'PHP');

// Loop (getIterator will be called automatically)
foreach ( $A as $field => $value ) {
 echo "$field : $value<br>";
}

foreach ( $A as $field => $value ) {
 print_r($A->title);
 echo "<br>";
}


// Get the size of the iterator (see how many properties are left)
echo "Object has ".sizeof($A->getIterator())." elements";