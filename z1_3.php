<?php

echo "Обмін значень масиву<br><br>";

$a = 0;

  do {
    $mass[$a] = rand(10, 230);
    $a++;
  }

 while ($a < 10);

var_dump($mass);

$buf = $mass[0];
$mass[0] = $mass[9];
$mass[9] = $buf;

echo "<br><br><br>";

var_dump($mass);

 ?>
