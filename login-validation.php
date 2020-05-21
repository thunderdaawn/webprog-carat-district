<?php

session_start();

$con = mysqli_connect('localhost','root', '');

mysqli_select_db($con, 'carat_district');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT password from users where username = '$username'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
	
	$row = mysqli_fetch_array($result);
	$password_hash = $row['password'];
	echo $password_hash;

	if(password_verify($password, $password_hash)){
			$_SESSION['username'] = $username;
		 	header('location:index.php'); // redirect
	}
	else{
		header('location:login-retry.php'); // redirect
	}
}


  ?>