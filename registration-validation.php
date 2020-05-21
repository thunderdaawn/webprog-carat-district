<?php

session_start();

$con = mysqli_connect('localhost','root' ,'');

mysqli_select_db($con, 'carat_district');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$middle_name = $_POST['middle_name'];
$suffix = $_POST['suffix'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = " SELECT * from users where username = '$username'";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "UserName Already Taken";
	header('location:register.php'); 
}else{
	$reg = "Insert into users(first_name, last_name, middle_name, suffix, email, username, password) values ('$first_name','$last_name','$middle_name','$suffix','$email','$username','$hash')";

	$_SESSION['username'] = $username;
	mysqli_query($con,$reg);

	header('location:index.php'); // redirect
}
  ?>