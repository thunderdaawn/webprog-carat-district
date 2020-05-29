<!DOCTYPE html>
<html>
<head>
	<title> Carat District: Confirm Checkout </title>
	
	<link rel="stylesheet" type="text/css" href="CSS/page-style.css">

	<?php
		session_start();
		require_once('view-comp/header.php');

		require_once('service/db-connection-service.php');
		mysqli_select_db($db, 'carat_district');

		$address = $_GET['address'];
		$username = $_SESSION['username'];

		$sql = "UPDATE users SET address = '$address' WHERE username = '$username'";

		mysqli_query($db, $sql);

	?>

</head>

<body onload="onloadConfirmCheckout()" style="background-color: #D3F5FA">

	<?php
		require_once('view-comp/navbar-special-two.php');
	?>
	
	<br>

	<div class="container">

		<center>

			<img src="images/confirm-checkout-label.png" style="width: 750px; height: 175px;">

			<br>
			<br>

			<div style="background-color: white;">
			
			<br>

			<h2 style="background-color: #a3a7c9; padding:6px; width: 95%; color: white;"><b>ORDER SUMMARY</b></h2>

			<br>

			<span style="font-size:17px;">
				Payment Method: <b> <span style="color:black;" id="paymentHolder"> </span> </b> <br>
				Shipping Address: <b> <span style="color:black;" id="addressHolder"> </span> </b> <br>
				Shipping Method: <b> <span style="color:black;" id="shippingHolder"> </span> </b> <br>
			</span>

			<br>

			<div style="background-color:#C4C1E5; width: 90%;">

				<div class="cart-items">
					<h4 style="background-color: white; padding:6px; color: #2C2A3D;"><b>ITEM DETAILS</b></h4>

				</div>

				<br>

				<div style="padding-bottom: 8px;">
					<span style="font-size: 15px;"> <b> Total Number of Items: <span id="totalItems"> 3 </span> </span> </b>
					<br>
				</div>

			</div>

			<div align="center">
				<span style="font-size: 17px;"> 
				<br><i> Merchandise Subtotal:</i> <b> PHP  <span id="subtotalAmount" class="cart-items-total-price"> </span> </b> <br> 
				<i>Shipping Total:</i> <b> PHP <span id="shippingAmount"> 0 </span> </b> </span> <br> <br>
				<span style="font-size: 19px;"> 
				<b style="color: #2C2A3D;"> Total: PHP <span id="totalAmount"> </span> </b> </span> </p>
			</div>

			<br>
			<div align="center">
				<a href="index.php" class="btn btn-danger"> <i class="fas fa-times-circle"></i> &nbsp; Cancel Order </a>
					&nbsp; &nbsp;
				<button type="submit" class="btn btn-success" onclick="confirmOrder()">
					Confirm Order &nbsp; </span> <i class="fas fa-check-circle"></i></div></button>
				<br>
			</div>
		
		</div>
		</center>
	
	</div>

</body>
</html>