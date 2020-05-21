<!DOCTYPE html>
<html>
<head>
	<title> Carat District: Confirm Checkout </title>
	
	<link rel="stylesheet" type="text/css" href="CSS/page-style.css">

	<?php
		session_start();
		require_once('service/cart-service.php');
		require_once('view-comp/header.php');
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
				Payment Method: <b> <span style="color:black;" id="payment-holder"> </span> </b> <br>
				Shipping Address: <b> <span style="color:black;" id="address-holder"> </span> </b> <br>
				Shipping Method: <b> <span style="color:black;" id="shipping-holder"> </span> </b> <br>
			</span>

			<br>

			<div style="background-color:#C4C1E5; width: 90%;">

				<div class="cart-items">
					<h4 style="background-color: white; padding:6px; color: #2C2A3D;"><b>ITEM DETAILS</b></h4>

				</div>

				<br>

				<div style="padding-bottom: 8px;">
					<span style="font-size: 15px;"> <b> Total Number of Items: <span id="total-items"> 3 </span> </span> </b>
					<br>
				</div>

			</div>

			<div align="center">
				<span style="font-size: 17px;"> 
				<br><i> Merchandise Subtotal:</i> <b> PHP  <span id="subtotal-amount" class="cart-items-total-price"> </span> </b> <br> 
				<i>Shipping Total:</i> <b> PHP <span id="shipping-amount"> 0 </span> </b> </span> <br> <br>
				<span style="font-size: 19px;"> 
				<b style="color: #5D5A80;"> Total: PHP <span id="total-amount"> </span> </b> </span> </p>
			</div>

			<br>
			<div align="center">
				<a href="index.php" class="btn btn-danger"> <i class="fas fa-arrow-circle-left"></i> &nbsp; Cancel Order </a>
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