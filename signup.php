<?php
		
	//start session
	session_start();	

	//get username and password from $_POST
	$username = $_POST["username"];
	$password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $verification_question = $_POST["verification_question"];
    $verification_answer = $_POST["verification_answer"];
    $location = $_POST["location"];
    $profile_pic = $_POST["profile_pic"];

	$dbhost = "localhost";	
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "myDB";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if( mysqli_connect_errno($conn)){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// need to insert data into database
    $result_insert = mysqli_query($conn, "INSERT INTO users(username, password, name, email, dob, gender, verification_question, verification_answer, location, profile_pic) VALUES ('$username', '$password', '$name', '$email', '$dob', '$gender', '$verification_question', '$verification_answer', '$location', '$profile_pic')");

    header("Location: feed.php");
?>