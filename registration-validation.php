<?php

session_start();

@ $db = new mysqli('127.0.0.1:3306', 'root', '', 'carat_district');

$dbError = mysqli_connect_errno();

if($dbError) {
	throw new Exception('Error: Could not connect to database. Please try again later. '.$dbError, 1);
}


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$middle_name = $_POST['middle_name'];
$suffix = $_POST['suffix'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$query = " SELECT * from users where username = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("s",$username);
$stmt->execute();

$stmt->store_result();

$stmt->bind_result($uName);

if($stmt->num_rows > 0){
	echo "UserName Already Taken";
	header('location:register.php'); 
}else{
	$reg = "Insert into users(first_name, last_name, middle_name, suffix, email, username, password) values (?,?,?,?,?,?,?)";

	$stmt = $db->prepare($reg);
	$stmt->bind_param("sssssss", $first_name,$last_name,$middle_name,$suffix,$email,$username,$hash);
	$stmt->execute();
	$stmt->close();

	$_SESSION['username'] = $username;
	header('location:index.php'); // redirect
}
  ?>