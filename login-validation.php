<?php

session_start();

require_once('service/log-service.php');

@ $db = new mysqli('127.0.0.1:3306', 'root', '', 'carat_district');

$dbError = mysqli_connect_errno();

if($dbError) {
	throw new Exception('Error: Could not connect to database. Please try again later. '.$dbError, 1);
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT username, password from users where username = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("s",$username);
$stmt->execute();

$stmt->store_result();

$stmt->bind_result($uName,$pw);

if($stmt->num_rows > 0){
	
	$stmt->fetch();
	echo $pw;
	if(password_verify($password, $pw)){
		$_SESSION['username'] = $username;
		loginLogMessage($username);
		header('location:index.php'); // redirect
	}
	else{
		header('location:login.php?error=1'); // redirect
	}
} else if($stmt->num_rows <= 0) {
	header('location:login.php?error=1'); // redirect
}


  ?>