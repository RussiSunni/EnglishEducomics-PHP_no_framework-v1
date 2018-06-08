<?php
include 'signin_config.php';
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="style.css">
		<style>
			body {background-color: #d6b47e;}
		</style>
	</head>
	<body>
		<div align="center">
			<br><br>
			<h3>Welcome to Sunshine English School</h3><p>
			<img src="https://sunshineenglishschool.000webhostapp.com/images/writing.jpeg" height="400" width="300">
			<p>

			<form method="post" action="signin.php">
			I will need your name please?  <input type="text" name="name"><p>

			And your surname?  <input type="text" name="surname"><p>

			Lastly, I will need some sort of password  <input type="text" name="password"><p>
			<input type="submit" name = "submit" id="submit" class="left">
			<p>
			</form>
			<p>
		</div>
	</body>
</html>