<?php

/**
* An iterator for native PHP arrays, re-inventing the wheel
*
* Notice the "implements Iterator" - important!
*/
class ArrayReloaded implements Iterator {

   /**
   * A native PHP array to iterate over
   */
 private $array = array();

   /**
   * A switch to keep track of the end of the array
   */
 private $valid = FALSE;

   /**
   * Constructor
   * @param array native PHP array to iterate over
   */
 function __construct($array) {
   $this->array = $array;
 }

   /**
   * Return the array "pointer" to the first element
   * PHP's reset() returns false if the array has no elements
   */
 function rewind(){
   $this->valid = (FALSE !== reset($this->array));
 }

   /**
   * Return the current array element
   */
 function current(){
   return current($this->array);
 }

   /**
   * Return the key of the current array element
   */
 function key(){
   return key($this->array);
 }

   /**
   * Move forward by one
   * PHP's next() returns false if there are no more elements
   */
 function next(){
   $this->valid = (FALSE !== next($this->array));
 }

   /**
   * Is the current element valid?
   */
 function valid(){
   return $this->valid;
 }
}


