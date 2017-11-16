<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
		<input type="text" placeholder="a" name='a'> <br><br>
		<input type="text" placeholder="b" name='b'> <br><br>
		<input type="submit" name="submit"> 
	</form>

<?php	

    $a = $_POST['a'];
    $b = $_POST['b'];
 
    $c = $a + $b;
    $d = $a - $b;
    $e = $b - $a;
    $f = $a * $b;

     if ( isset($_POST['submit']) ) {   
	       echo '<br><br>a = '.$a.'<br><br>b = '.$b;
	       echo '<br><br>a + b = '.$c;
           echo '<br><br>a - b = '.$d;
           echo '<br><br>b - a = '.$e;
           echo '<br><br>a * b = '.$f;
	   }
   
?>

</body>
</html>