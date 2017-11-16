<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
		<input type="text" placeholder="Введіть кількість годин" name='a'> <br><br>
		<input type="submit" name="submit"> 
	</form>

<?php	

    $a = $_POST['a'];

    $b = ' годині - ';
     
    if ($a > 1) {
    	$b = ' годинах - ';
    }
    
    $c = $a * 3600;

     if ( isset($_POST['submit']) ) {   
     	if ($a > 0) {
	       echo '<br><br>У '.$a.$b.$c.' секунд.';
     	}

     	else {
     		echo "<br>Введіть кількість годин!";
     	}
	   }
   
?>

</body>
</html>