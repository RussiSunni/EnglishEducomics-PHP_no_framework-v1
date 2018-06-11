<?php
include 'signin_config.php';

session_start();

$name = $_SESSION['name'];



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
			ah yes, it is... <?php echo $name; ?>. <h3><a href="thisway.php">Welcome! </a></h3>

			
			
		</div>
	</body>
</html>