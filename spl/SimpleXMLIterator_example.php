<?php

$xml = <<<XML
<books>
<book>
<title>PHP Basics</title>
<author>Jim Smith</author>
</book>
<book>XML basics</book>
</books >
XML;

// SimpleXML转换为数组 
function sxiToArray( $sxi ) {
  $a = array();
  for ( $sxi->rewind(); $sxi->valid(); $sxi->next() ) {
    if ( !array_key_exists( $sxi->key(), $a ) ) {
      $a[$sxi->key()] = array();
    }
    if ( $sxi->hasChildren() ) {
      $a[$sxi->key()][] = sxiToArray( $sxi->current() );
    } else {
      $a[$sxi->key()][] = strval( $sxi->current() );
    }
  }
  return$a;
}

$xmlIterator = new SimpleXMLIterator( $xml );
$rs = sxiToArray( $xmlIterator );
print_r( $rs );
/**output
    Array
    (
        [book] => Array
            (
                [0] => Array
                    (
                        [title] => Array
                            (
                                [0] => PHP Basics
                            )
                        [author] => Array
                            (
                                [0] => Jim Smith
                            )
                    )
                [1] => XML basics
            )
    )
    **/ 



