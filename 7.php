<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>7</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="l" placeholder="Кількість проданих літрів"><br><br>

        <input type="submit" name="submit"> 

	</form>

<?php 

    $l = $_POST['l'];

    if ( is_numeric($l) ) {
    	if ( $l < 1000 ) {
    	$zp = ($l * 6)/5;
       }
     	elseif ( $l < 2000 ) {
        $zp = ($l * 6)/4;
       }
        else {
        	$zp = ($l * 6)/100*30;
        }
    }

     echo '<br>'.$zp;
 
 ?>
</body>
</html>