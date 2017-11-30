<?php 

 if ( date(G) < 6 ) {
     $hi = 'Доброї ночі!';
 }  

 elseif ( date(G) < 12 ) {
 	$hi = 'Добрий ранок!';
 }

 elseif ( date(G) < 18 ) {
 	$hi = 'Добрий день!';
 }

  else {
 	$hi = 'Добрий вечір!';
 }

 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10</title>
</head>
<body>
  
<p><?php echo $hi; ?></p>

</body>
</html>