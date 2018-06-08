<?php
include 'config.php';

// REGISTER USER
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
		
// first check the database to make sure 
// a user does not already exist with the same username and/or email
	$user_check_query = "SELECT * FROM student_names WHERE name='$name' OR surname='$surname' LIMIT 1";
	$result = mysqli_query($con, $user_check_query);
	$user = mysqli_fetch_assoc($result);
  
	if ($user) { // if user exists
		echo "<p><p> Hmmm, I already have someone in my book by that name.";
	}

	else {
	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {

		$query = "INSERT INTO student_names (name, surname, password) VALUES ('$name', '$surname', '$password')";
		mysqli_query($con, $query);
		$_SESSION['name'] = $name;
		$_SESSION['success'] = "You are now logged in";
		header('location: welcome.php');
	}
	}
	
}

mysqli_close($con);
?>