<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
       
        <p>y = x2 + 15x - 7</p>

		<input type="text" name="x" placeholder="x1"> <br><br>
		<input type="text" name="y" placeholder="y1"> <br><br>

        <input type="submit" name="submit"> 

	</form>

    <?php 
       
        $x = $_POST['x'];
        $y = $_POST['y'];
     
 
      if ( is_numeric($x) && is_numeric($y) ) {
        if ( $y == pow($x, 2) + 15*$x - 7) {       	
        	echo "<br> Точка A ($x; $y) належить графіку";
        }

        else {
        	echo "<br> Точка A ($x; $y) не належиить графіку";
        }
       }

     ?>

</body>
</html>