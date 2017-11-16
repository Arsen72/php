<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>8</title>
	 <style>
       .exchange {
       	margin: 50px 30px;
       }

       input {
       	width: 90px;
       }
        
       .with {
       	position: absolute;

       }

       .to {
       	margin: 0px 230px;
       	position: absolute;
       }

       .w_t {
       	position: absolute;
       	margin: 5px -90px;
       	border: 0px solid black;
       	background: white;
       	height: 20px;
       	outline: none;
       }

       .w_t > p {
       	margin: -25px 0px;
       	font-size: 40px;
       	color: #08488F;
       	transition: .5s;
       	cursor: pointer;
       }

       .w_t > p:hover {
       	color: #F32A2A;
       	transition: .5s;
       }

       .t_w {
       	position: absolute;
       	margin: 35px -90px;
       	border: 0px solid red;
       	background: white;
       	height: 20px;
       }

       .t_w > p {
       	font-size: 40px;
       	color: #08488F;
       	transition: .5s;
       	cursor: pointer;
       	margin: -25px 0px;
       } 

       .t_w > p:hover {
       	color: #F32A2A;
       	transition: .5s;
       }

       p {
       	position: absolute;
       	font-family: sans-serif;
       }

       .course {
       	position: absolute;
       	margin: -53px 160px;
       	width: 60px;
       }

       .course_p {
         margin: -20px 25px;
       }

       .commis {
       	 position: absolute;
       	 margin: 21px 120px;
       }

       .commis_p {
         position: absolute;
         margin: -5px 127px;
       }

       .currency_cur {
       	position: absolute;
       	margin: 6px -45px;
       }
	 </style>
</head>
<body>
   <div class="exchange">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
      <div class="with">
		<select name="currency_1">

          <option value="uah">UAH</option>
          
        </select> <br><br>

        <input type="text" placeholder="Сума" name="uah_sum"> <br><br>
        
        <p class="commis_p">Комісія(%):</p> 
        <input type="number" value="0" class="commis" name="commis"> 
       </div>

       <div class="to">
       
       <button class="w_t" name="with_to"><p>→</p></button>
       <button class="t_w" name="to_with"><p>←</p></button>

        <select name="currency_2">

          <option value="usd">USD</option>
          <option value="eur">EUR</option>
          <option value="gbp">GBP</option>
          <option value="rub">RUB</option>

        </select> <br><br>

        <input type="text" placeholder="Сума" name="cur_sum"> <br><br>

        <div class='course'>
        
        <p class="course_p">Курс:</p> 
        
        <p class="currency_cur">USD:<br>EUR:<br>GBP:<br>RUB:</p>

        <input type="number" value="26.90" class="course_usd" name="course_usd"> <br>
        <input type="number" value="31.24" class="course_eur" name="course_eur"> <br>
        <input type="number" value="35.42" class="course_gbp" name="course_gbp"> <br>
        <input type="number" value="0.46" class="course_rub" name="course_rub">

        </div>

      </div>
	</form>
   </div>
   <div style='position: absolute; margin: 150px 0px;'>

<?php    
       if ( isset($_POST['with_to']) ) {
       	  $cur = 'course_'.$_POST['currency_2'];
       	  $result = $_POST['uah_sum'] / $_POST[$cur];

       	  if ( $_POST['commis'] > 0 ) {
             $result = $result + $result / 100 * $_POST['commis'];
       	  }

       	  echo "<p style='width: 500px;'>".$_POST['uah_sum']." UAH = ".round($result, 2)." ".strtoupper($_POST['currency_2'])." [".date("H:i:n")." ".date("d/m/Y")."]</p>";
       }

       if ( isset($_POST['to_with']) ) {
       	  $cur = 'course_'.$_POST['currency_2'];
       	  $result = $_POST['cur_sum'] * $_POST[$cur];
       	  if ( $_POST['commis'] > 0 ) {
             $result = $result + $result / 100 * $_POST['commis'];
       	  }
       	  echo "<p style='width: 500px;'>".$_POST['cur_sum']." ".strtoupper($_POST['currency_2'])." = ".round($result, 2)." UAH [".date("H:i:n")." ".date("d/m/Y")."]</p>";
       }

?>

</div>

</body>
</html>