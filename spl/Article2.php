<?php


/**
* A class that can be used like an array
*/
class Article2 implements ArrayAccess,IteratorAggregate {

 public $title;

 public $author;

 public $category;  

 function __construct($title,$author,$category) {
   $this->title = $title;
   $this->author = $author;
   $this->category = $category;
 }

 /**
 * Defined by ArrayAccess interface
 * Set a value given it's key e.g. $A['title'] = 'foo';
 * @param mixed key (string or integer)
 * @param mixed value
 * @return void
 */
 function offsetSet($key, $value) {
   if ( array_key_exists($key,get_object_vars($this)) ) {
     $this->{$key} = $value;
   }
 }

 /**
 * Defined by ArrayAccess interface
 * Return a value given it's key e.g. echo $A['title'];
 * @param mixed key (string or integer)
 * @return mixed value
 */
 function offsetGet($key) {
   if ( array_key_exists($key,get_object_vars($this)) ) {
     return $this->{$key};
   }
 }

 /**
 * Defined by ArrayAccess interface
 * Unset a value by it's key e.g. unset($A['title']);
 * @param mixed key (string or integer)
 * @return void
 */
 function offsetUnset($key) {
   if ( array_key_exists($key,get_object_vars($this)) ) {
     unset($this->{$key});
   }
 }

 /**
 * Defined by ArrayAccess interface
 * Check value exists, given it's key e.g. isset($A['title'])
 * @param mixed key (string or integer)
 * @return boolean
 */
 function offsetExists($offset) {
   return array_key_exists($offset,get_object_vars($this));
 }
 
 /**
 * Defined by IteratorAggregate interface
 * Returns an iterator for for this object, for use with foreach
 * @return ArrayIterator
 */
 function getIterator() {
   return new ArrayIterator($this);
 }

}


