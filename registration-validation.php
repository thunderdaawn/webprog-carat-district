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
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$suffix = $_POST['suffix'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$query = " SELECT * from users where username = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("s",$username);
$stmt->execute();

$stmt->store_result();

$stmt->bind_result($uName);

if($stmt->num_rows > 0){
	echo "Username Already Taken";
	header('location:register.php'); 
}else{
	$reg = "Insert into users(firstName, lastName, middleName, suffix, email, username, password) values (?,?,?,?,?,?,?)";

	$stmt = $db->prepare($reg);
	$stmt->bind_param("sssssss", $firstName,$lastName,$middleName,$suffix,$email,$username,$hash);
	$stmt->execute();
	$stmt->close();

	$_SESSION['username'] = $username;
	registerLogMessage($username);
	header('location:index.php'); // redirect
}
  ?>