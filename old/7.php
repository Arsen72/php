<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>7</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
		<input type="text" placeholder="Ваше ім'я" name='name'> <br><br>
		<input type="text" placeholder="Ваше прізвище" name='s_name'> <br><br>
		<input type="submit" name="submit"> 
	</form>
	<?php  

	$name = $_POST['name'];
    $s_name = $_POST['s_name']; 

    if ( isset($_POST['submit']) ) {
    	if ( preg_match("[^а-яА-Я\s]+/msi",$name) ) {
    		echo "<br>Привіт ".$name." ".$s_name;
    	}
    }
    
    ?>
</body>
</html>