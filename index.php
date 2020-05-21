<!DOCTYPE html>
<html>
<head>
	<title> Carat District: Home </title>
	
	<link rel="stylesheet" type="text/css" href="CSS/page-style.css">

	<?php
		session_start();
		require_once('service/cart-service.php');
		require_once('view-comp/header.php');
	?>

</head>

<body onload="ready()" style="background-color: #D3F5FA">

	<div class="navbar-div">

		<?php 
			if(isset($_SESSION['username'])) {
				require_once('view-comp/navbar.php');
				require_once('view-comp/view-cart-modal.php');
			}

			else {
				require_once('view-comp/navbar-guest.php');
			}
		?>
	
	</div>
	
	<br> <br>

	<div class="container">

	<form action="search.php" method="post">

		<div class="row form-group">
			&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
			<input type="text" name="searchTerm" id="searchTerm" class="form-control col-5 mx-3" placeholder="Search for a product here"> 
			<button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
		</div>

	</form>


	<div id="carousel-sample" class="carousel slide my-4" ride="false" data-interval="3000">

		<div class="carousel-inner">

			<div class="carousel-item active">
				<img class="d-block w-100" src="images\carousel1.png" alt="#WelcomeCarats" style="height: 400px; width: 400px;">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="images\carousel2.png" alt="#CaratDistrictArrival" style="height: 400px; width: 400px;">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="images\carousel3.png" alt="#CaratDistrictRestock" style="height: 400px; width: 400px;">
			</div>

				<div class="carousel-item">
				<img class="d-block w-100" src="images\carousel4.png" alt="#CaratDistrictCares" style="height: 400px; width: 400px;">
			</div>
				
		</div>

		<a href="#carousel-sample" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"> </span>
		</a>

		<a href="#carousel-sample" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"> </span>
		</a>

	</div>
	</div>


</body>
</html>