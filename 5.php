<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>5</title>
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

    if ( isset($_POST['submit']) ) {

    echo "<br>";

    if ( $a + $b < $c ) {
        echo "Неможливо";
    }

    elseif ( $b + $c < $a ) {
    	echo "Неможливо";
    }

    elseif ( $a + $c < $b ) {
    	echo "Неможливо";
    }
    
    else { 
    	echo "Можливо";
    }
    
    }

    ?>
</body>
</html>