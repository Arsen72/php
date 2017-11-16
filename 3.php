<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="a" placeholder="a"><br><br>
		<input type="text" name="b" placeholder="b"><br><br>
		<input type="text" name="c" placeholder="c"><br><br>
		<input type="text" name="d" placeholder="d"><br><br>
		<input type="text" name="e" placeholder="e"><br><br>

        <input type="submit" name="submit"> 

	</form>

<?php 

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];

	if ( $a > $b ) $max = $a;
	else $max = $b;
	if ( $c > $max ) $max = $c;
	if ( $e > $max ) $max = $e;
	if ( $d > $max ) $max = $d;

	echo '<br>'.$max;
 
 ?>
</body>
</html>