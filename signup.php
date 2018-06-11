<?php
include 'signup_config.php';
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
			<img src="writing.jpeg" height="400" width="300">
			<p>
			<strong>A new student, how wonderful.</strong>
			<form method="post" action="signup.php">
			What is your name, child?  <input type="text" name="name" value="<?php echo $name; ?>"><p>

			And your surname?  <input type="text" name="surname" value="<?php echo $surname; ?>"><p>

			Lastly, I will need some sort of password  <input type="text" name="password"><p>
			<input type="submit" name = "submit" id="submit" class="left">
			<p>
			</form>
			
			<?
				if (isset($_POST['name'])){
						$name = $_POST['name'];
						$surname = $_POST['surname'];
					}
                                        
          	?>
			<p>
		</div>
	</body>
</html>