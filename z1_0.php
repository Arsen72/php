<?php

echo "Створення масиву<br><br>";

$a = 0;

  do {
    $mass[$a] = rand(10, 230);
    $a++;
  }

 while ($a < 10);

var_dump($mass);

 ?>
