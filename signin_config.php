<?php
include 'config.php';

session_start();

if (isset($_POST['submit'])) {

	$name = $_POST['name']; 
	
	$surname = $_POST['surname'];
	$password = $_POST['password'];

	$errors = array(); 

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($name)) { array_push($errors, "name is required"); }
	if (empty($surname)) { array_push($errors, "surname is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }

	if (empty($name)) {
		echo "please answer all the questions";
	}
	elseif (empty($surname)) {
		echo "please answer all the questions";
	}
	elseif (empty($password)) {
		echo "please answer all the questions";
	}

	if (count($errors) == 0) {
  	$query = "SELECT * FROM student_names WHERE name='$name' AND password='$password'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) != 0) {
  	  $_SESSION['name'] = $name;
  	  $_SESSION['success'] = "You are now logged in";
	  header('location: welcome.php');
  	}else {
  		//array_push($errors, "Wrong username/password combination");
		echo "I'm sorry, I cant find you anywhere in my book.";
  	}
  }
  
			
		



  
  
}

mysqli_close($con);
?>