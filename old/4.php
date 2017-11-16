<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4</title>
	 <style>
	 	* {
	 		font-family: sans-serif;
	 	}
	 </style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<h4>A:</h4>

		<input type="text" placeholder="x1" name='x1'> <br><br>
		<input type="text" placeholder="x2" name='x2'> <br><br>

		<h4>B:</h4>

		<input type="text" placeholder="y1" name='y1'> <br><br>
		<input type="text" placeholder="y2" name='y2'> <br><br>

		<input type="submit" name="submit" value="Порахувати"> 
	</form>
	 <?php 
        if ( isset($_POST['submit']) ) {
        	$x1 = $_POST['x1'];
        	$x2 = $_POST['x2'];
        	$y1 = $_POST['y1'];
        	$y2 = $_POST['y2'];

            $result = sqrt( pow($x1 - $x2, 2) + pow($y1 - $y2, 2) );

            echo '<br>Відстань від точки <b>A</b> до <b>B</b> = '.$result;
        }
	  ?>
</body>
</html>