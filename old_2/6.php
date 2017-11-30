<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>6</title>
	 <style>
	 	input {
	 		width: 30px;
	 	}

	 	.submit {
	 		width: 90px;
	 		margin: 0px 10px;
	 	}
	 </style>
</head>
<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="a" placeholder="a"> x<sup>2</sup> +
		<input type="text" name="b" placeholder="b"> x +
		<input type="text" name="c" placeholder="c"> = 0

        <input type="submit" name="submit" class="submit"> 

	</form>
	 <?php 

      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      
      if ( isset($_POST['submit']) ) {
       if ( is_numeric($a) && is_numeric($b) && is_numeric($c) ) {
         echo '<br>'.$a.'x<sup>2</sup> + '.$b.'x + '.$c.' = 0';  // виводимо рівнаяння
         $d = pow($b, 2) - 4*$a*$c;                             // визначажмо дискримінант
         echo "<br><br>D = $b<sup>2</sup> - 4 * $a * $c = $d"; // виводимио дискримінант 
          if ( $d > 0 ) {
         $x1 = -$b + sqrt($d) / 2*$a;
         $x2 = -$b - sqrt($d) / 2*$a;
         echo '<br><br> x<sub>1</sub> = '.$x1;
         echo '<br><br> x<sub>2</sub> = '.$x2;
        } 
         elseif ( $d == 0 ) {
         	$x = -$b / 2*$a;
         	echo '<br><br> x = '.$x;
         }
         else {
         	echo "<br><br>Рівнаяння не має дійсних коренів";
         } 
       }

       else {
       	 echo "<br><p style='color: red;'>Введіть тільки числа!</p>";
       }
      }
	  ?>
</body>
</html>