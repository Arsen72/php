<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="a" placeholder="a"><br><br>
		<input type="text" name="b" placeholder="b"><br><br>

        <input type="submit" name="submit"> 

	</form>

<?php 

    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

	if ( $a > $b ) echo '<br>'.$a.' > '.$b;
	if ( $a < $b ) echo '<br>'.$b.' > '.$a;
	if ( $a == $b ) echo "<br>".$a. ' = ' .$b;
 
 ?>

</body>
</html>