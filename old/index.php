<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	 <style>
@keyframes right {
	0% {
      margin-left: 3000px;
	}

	100% {
      margin: 0px 683px;
	}
}

@keyframes left {
	0% {
      margin: 0px -1000px;
	}

	100% {
      margin: 0;
	}
}


      body {
      	padding: 0;
      	margin: 0;
      }

       .left {
       	position: absolute;
       	border: 0px solid blue;
       	height: 500px;
       	width: 683px;
       	padding: 0;
        animation: left 0.5s ease-out 0s;
       }

       .right {
       	position: absolute;
       	border: 0px solid red;
       	height: 500px;
       	width: 683px;
       	padding: 0;
       	margin: 0px 683px;
       	animation: right 0.5s ease-out 0s;
       }

       .d1 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 150px 310px;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d1 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	transition: .5s;
       }

       .d1:hover , .d2:hover , .d3:hover , .d4:hover , .d5:hover , .d6:hover , .d7:hover , .d8:hover{
       	background: #6119CD;
       }

       .d1:hover p , .d2:hover p , .d3:hover p , .d4:hover p , .d5:hover p , .d6:hover p , .d7:hover p , .d8:hover p {
       	color: white;
       }

       .d2 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 150px 560px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d2 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d3 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 150px 73px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d3 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d4 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 150px 299px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d4 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d5 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 300px 310px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d5 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d6 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 300px 560px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d6 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d7 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 300px 73px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d7 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d8 {
       	position: absolute;
       	height: 50px;
       	width: 50px;
       	border: 2px solid #6119CD;
       	margin: 300px 299px;
       	cursor: pointer;
       	transition: .5s;
       }

       .d8 > p {
       	position: absolute;
       	color: #6119CD;
       	font-family: sans-serif;
       	font-size: 30px;
       	margin: 10px 15px;
       	cursor: pointer;
       	transition: .5s;
       }


  	 </style>
</head>
<body>

  <div class="left">
	<a href="1.php"><div class="d1"><p>1</p></div></a>
	<a href="2.php"><div class="d2"><p>2</p></div></a>
	<a href="3.php"><div class="d5"><p>5</p></div></a>
	<a href="4.php"><div class="d6"><p>6</p></div></a>
  </div>

  <div class="right">
  	<a href="5.php"><div class="d3"><p>3</p></div></a>
	<a href="6.php"><div class="d4"><p>4</p></div></a>
	<a href="7.php"><div class="d7"><p>7</p></div></a>
	<a href="8.php"><div class="d8"><p>8</p></div></a>
  </div>

</body>
</html>