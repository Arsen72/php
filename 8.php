<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>8</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="vik" placeholder="Вік"><br><br>

        <input type="submit" name="submit"> 

	</form>
	<?php 
      
     $vik = (int)$_POST['vik'];


    	if ( $vik < 6 ) {
    	$st = 'Дошкільня';
       }

     	elseif ( $vik < 17 ) {
    	$st = 'Школяр';
       }

        elseif ( $vik <= 23 ) {
    	$st = 'Студент';
       }

        elseif ( $vik > 23 ) {
        $st = 'Спеціаліст';
       } 

     echo '<br>'.$st; 
          
     ?>
</body>
</html>