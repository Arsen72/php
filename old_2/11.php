<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>11</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="num" placeholder="Номер дня тиждня"><br><br>

        <input type="submit" name="submit"> 

	</form>
	<?php 

    $num = (int)$_POST['num'];

    if ( $num < 8 ) {
    	switch ($num) {

    		case 1:
    		  echo "<br>Понеділок";
    			break;

    		case 2:
    		  echo "<br>Вівторок";
    			break;

    		case 3:
    		  echo "<br>Середа";
    			break;

    		case 4:
    		  echo "<br>Четвер";
    			break;

    		case 5:
    		  echo "<br>П'ятниця";
    			break;

    		case 6:
    		  echo "<br>Субота";
    			break;

    		case 7:
    		  echo "<br>Неділя";
    			break;
    		
    	}
       }

    	else {
            	echo "<br><p style='color: red;'>Введіть ціле число від 1 до 7!</p>";
    	   }
    

    ?>
</body>
</html>