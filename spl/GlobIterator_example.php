<?php

//找出../目录中.php扩展名的文件 
$iterator = new GlobIterator( './*.php' );
if ( !$iterator->count() ) {
  echo'无php文件';
} else {
  $n = 0;
  printf( "总计 %d 个php文件\r\n", $iterator->count() );
  foreach ($iterator as $item) {
    printf( "[%d] %s\r\n", ++$n, $iterator->key() );
  }
}  


