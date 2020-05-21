<?php 
	@ $db = new mysqli('127.0.0.1:3306', 'root', '', 'carat_district');

	$dbError = mysqli_connect_errno();

	if($dbError) {
		throw new Exception('Error: Could not connect to database. Please try again later. '.$dbError, 1);
	}

?>