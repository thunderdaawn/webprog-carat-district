<!DOCTYPE html>
<html>
<head>
	<title> Carat District: Confirm Checkout </title>
	
	<link rel="stylesheet" type="text/css" href="CSS/page-style.css">

	<?php
		session_start();
		require_once('view-comp/header.php');
		require_once('service/db-connection-service.php');
		require_once('address-verify.php');
	?>

</head>

<body onload="onloadCheckout()" style="background-color: #D3F5FA">

	<?php
		require_once('view-comp/navbar-special-two.php');
	?>
	
	<br>

	<div class="container">
		<center>
			<img src="images/checkout-label.png" style="width: 750px; height: 175px;">
		</center>
			<br>

			<a href ="index.php" class="btn btn-secondary"> <i class="fas fa-arrow-circle-left"></i> &nbsp; Back to Home </a>

			<br>
			<br>

			<center>

			<div class="row">

				<div class="col-sm-6" style="width:100%; background-color: white;">

					<br>
					<h3 style="background-color: #a3a7c9; padding:6px; color: white;"><b>CART SUMMARY</b></h3>
					<br>

					<div class="cart-items" style="width: 100%;" >

				
					</div>

				</div>

				<div class="col-sm-6" style="width:40%; background-color: #C4C1E5;">

					<br>
					<h3 style="background-color: white; padding:6px; color: #5D5A80;"><b>CUSTOMER DETAILS</b></h3>
					<br>

					<form action = "confirm-checkout.php" method="GET" id="order-form">

						<div class="form-group">

						<div align="center"style="align-items: center;">
							<label for="payment"> <i class="fas fa-credit-card"></i>&nbsp;<b> Payment Method:</b> </label>
							<select id= "payment" name ="payment" onchange="onchangePayment()" class="form-control col-10" required>
								<option value="cod">Cash on Delivery</option>
								<option value="card">Credit Card or Debit Card</option>
							</select>

							<div class="payment-div">

							</div>

						</div>

						<br>

						<div align="center">
				        	<label for="address"> <i class="fas fa-truck"></i> &nbsp;<b>Shipping Details: </b></label>
				            <input type="text" name="address" class="form-control col-10" id="address" value="<?php echo $theAddress ?>"required>
				        </div>

				        <div align="center" class="my-2">
							<select id= "shipping" name ="shipping" onchange="onchangeShipping()" class="form-control col-10">
								<option value="standard">Standard Express Shipping - PHP 75</option>
								<option value="lbc"> LBC Express - PHP 100 </option>
								<option value="jrs"> JRS Express - PHP 200 </option>
								<option value="xpost"> XPost Integrated - PHP 150 </option>
								<option value="j&t"> J&T Express - 180 </option>
							</select>
						</div>

						<div align="center">
							<span style="font-size: 17px;"> 
							<br><i> Merchandise Subtotal:</i> <b> PHP  <span id="subtotal-amount"> </span> </b> <br> 
							<i>Shipping Total:</i> <b> PHP <span id="shipping-amount"> 0 </span> </b> </span> <br> <br>
							<span style="font-size: 17px;"> 
								<b> Total: PHP <span id="total-amount"> </span> </b> </span> </p>
						</div>

						<br>


						<div align="center">
							&nbsp; &nbsp;
							<button type="submit" class="btn btn-success" onclick="SubmitFunction()"> 
								Submit Order &nbsp; </span> <i class="fas fa-arrow-circle-right"></i></div></button>
							<br>
						</div>
					
					</form>
				</div>
			</div>
		</div>
	</center>

	</div>
</body>
</html>