<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="a" placeholder="a"><br><br>
		<input type="text" name="b" placeholder="b"><br><br>
		<input type="text" name="c" placeholder="c"><br><br>

        <input type="submit" name="submit"> 

	</form>

<?php 

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

	if ( $a < $b ) $min = $a;
	else $min = $b;
	if ( $c < $min ) $min = $c;

	echo '<br>'.$min;
 
 ?>
</body>
</html>