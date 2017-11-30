<?php

echo "Сума елементів масиву<br><br>";

$a = 0;

  do {
    $mass[$a] = rand(10, 230);
    $sum = $sum + $mass[$a];
    $a++;
  }

 while ($a < 10);

var_dump($mass);

echo '<br>'.$sum;

 ?>
