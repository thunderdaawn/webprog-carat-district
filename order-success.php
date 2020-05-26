<!DOCTYPE html>
<html>

<head>
	<title> Carat District: Order Success </title>

	<?php
		session_start();
		require_once('view-comp/header.php');
		require_once('service/log-service.php');
	?>
	
</head>

<body style="background-color: #D3F5FA">

	<?php
		require_once('view-comp/navbar-special-three.php');
		checkoutLogMessage($_SESSION['username']);
	?>
	
	<br>
	<br>

	<center>

	<img src="images/order-success.png" style="height: 400px; width: 950px;">

	<br>
	<br>

	<a href="index.php" class="btn btn-secondary"> <i class="fas fa-home"></i> &nbsp; Return to Home </a>

	</center>

</div>
</body>
</html>