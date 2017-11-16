<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
		<input type="text" placeholder="Введіть ваше ім'я" name='name'> <br><br>
		<input type="submit" name="submit"> 
	</form>
	<?php

       $name = $_POST['name'];

       settype($name, "string");

       echo $name;
	 ?>
</body>
</html>