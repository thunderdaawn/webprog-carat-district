<!DOCTYPE html>
<html>
<head>
	<title> Carat District: Cart </title>
	
	<link rel="stylesheet" type="text/css" href="CSS/page-style.css">

	<?php
		session_start();
		require_once('view-comp/header.php');
	?>

</head>

<body onload="onloadCartPage()" style="background-color: #D3F5FA">

	<?php
		require_once('view-comp/navbar-special.php');
	?>
	
	<br>

	<div class="container">
		<center>
			<img src="images/cart-label.png" style="width: 750px; height: 175px; padding-bottom: 7px;">

			<br>
			<br>

			<div style="background-color:#C4C1E5; width: 90%;">


				<div class="cart-items">
					<h2 style="background-color: white; padding:6px; color: #2C2A3D;"><b>VIEW & EDIT YOUR CART</b></h2>
					<br>

				</div>

				<br>

				<div class="col">
					<p style="font-size: 18px;"><i>Total No. of Items: </i><b><span id="total-items" style="color: #2C2A3D;">0</span></b>
					<br>
					<i>Merchandise Subtotal:</i><b><span style="color: #2C2A3D;"> PHP <span class="cart-items-total-price">0</span></span></b></p>
				</div>

				<br>

				<div class="col">
					<button onclick="goBackFunction2()" class="btn btn-info"> <i class="fas fa-arrow-circle-left"></i> &nbsp; Back to Home </button>
					&nbsp; &nbsp;
					<button onclick="checkoutFunction()" class="btn btn-success checkout-btn"> Go to Checkout &nbsp;<i class="fas fa-arrow-circle-right"></i> </button>
				</div>

				<br>

			</div>

		</center>

	</div>


</body>
</html>