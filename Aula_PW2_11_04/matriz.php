<?php
// exemplo matriz

  $b[0][0] = 100;
  $b[0][1] = 200;
  $b[0][2] = 300;
  $b[1][0] = 400;
  $b[1][1] = 500;
  $b[1][2] = 600;

  for($j=0;$j<2;$j++){
    for($i=0;$i<3;$i++){
        echo $b[$j][$i] . "<br>";

    }
  }
  ?>