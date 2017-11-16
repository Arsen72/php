<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>6</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
	<input type="text" placeholder="Довжина (м)" name='a'> <br><br>
	<input type="text" placeholder="Ширина (м)" name='b'> <br><br>
	<input type="text" placeholder="Висота (м)" name='c'> <br><br>
	<input type="submit" name="submit" value="Обчислити"> 
</form>
 <?php 
     $a = $_POST['a'];
     $b = $_POST['b'];
     $c = $_POST['c'];

     $d = $a * $c;
     $e = $b * $c;
     $f = $d * 2 + $e * 2;
     
     $g = $f * 2;

    if ( isset($_POST['submit']) ) {
     echo '<br>Щоб пофарбувати стіни потрібно '.$g.' кг фарби';
    }

  ?>
</body>
</html>