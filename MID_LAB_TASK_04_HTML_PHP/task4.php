<?php
  $r = 50;
  $t = 34;
  $h = 22;
  if($r >= $t)
  {
    if($r >= $h)
    {
      echo "$t is the largest number";
    }
    else echo "$h is the largest number";
  }
  else if($t >= $h)
  {
    echo "$t is the largest number";
  }
  else echo "$h is the largest number";
?>
