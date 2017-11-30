<?php

echo "Найбільше значення масиву<br><br>";

$a = 0;

$max_2 = 0;

  do {
    $mass[$a] = rand(10, 230);
    if ($max_2 < $mass[$a]) {
      $max_2 = $mass[$a];
    }
    $a++;
  }

 while ($a < 10);

var_dump($mass);

$max = max($mass);

echo '<br><br>'.$max;

echo '<br>'.$max_2;

 ?>
