<?php
  $a = 50;
  $b = 34;
  $c = 22;
  if($a >= $b){
    if($a >= $c){
      echo "$a is the largest number";
    }
    else echo "$c is the largest number";
  }
  else if($b >= $c){
    echo "$b is the largest number";
  }
  else echo "$c is the largest number";
?>