<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>9</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>

		<input type="text" name="a" placeholder="a (0-9)"><br><br>

        <input type="submit" name="submit"> 

	</form>
	 <?php 

      $a = (int)$_POST['a'];
    

     if ( isset($_POST['submit']) ) {
     	
      if ( $a < 10 ) {
      	switch ($a) {
      		case 0:
      		   echo "<br>Нуль";
      			break;

      		case 1:
      		   echo "<br>Один";
      			break;

      		case 2:
      		   echo "<br>Два";
      			break;

      		case 3:
      		   echo "<br>Три";
      			break;

      		case 4:
      		   echo "<br>Чотири";
      			break;

      		case 5:
      		   echo "<br>П'ять";
      			break;

      		case 6:
      		   echo "<br>Шість";
      			break;

      		case 7:
      		   echo "<br>Сім";
      			break;

      	    case 8:
      		   echo "<br>Вісім";
      			break;

      		case 9:
      		   echo "<br>Дев'ять";
      			break;
      	}
      }
       else {
       	echo "<br><p style='color: red;'>Введіть ціле число від 0 до 9!</p>";
       }
   }

	  ?>
</body>
</html>