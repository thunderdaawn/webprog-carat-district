<?php require_once('service/https-service.php')  ?>
<!DOCTYPE html>
<html>
<head>
	<title> Carat District: Home </title>
	
	<link rel="stylesheet" type="text/css" href="css/page-style.css">

	<?php
		session_start();
		require_once('view-comp/header.php');
	?>

	<style type="text/css">

		.store-item:hover {
			border-color: #9796A1;
			border-style: solid;
			border-width: 2px;
			text-decoration: none;
			color: black;
		}

		a {
			text-decoration: none;
			color: black;
		}

	</style>

</head>

<body onload="ready()" style="background-color: #D3F5FA">

	<div class="navbar-div" id="navbar-div">

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


	<div id="carousel-sample" class="carousel slide" data-ride="carousel" data-interval="5000" style="margin-top: 40px;">

		<div class="carousel-inner">

			<div class="carousel-item active">
				<img class="d-block w-100" src="images\carousel1.png" alt="#CaratDistrictChingus" style="height: 400px; width: 400px;">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="images\carousel2.png" alt="#CaratDistrictArrival" style="height: 400px; width: 400px;">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="images\carousel3.png" alt="#CaratDistrictRestock" style="height: 400px; width: 400px;">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="images\carousel4.png" alt="#WelcomeCarats" style="height: 400px; width: 400px;">
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="images\carousel5.png" alt="#CaratDistrictCares" style="height: 400px; width: 400px;">
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

	<br>

	<div class="store-items">

		<?php

			try {

				require_once('service/db-connection-service.php');

				$query = 'SELECT name, link, imageSrc, price FROM products;';

				$result = $db->query($query);
				$resultCount = $result->num_rows;

				echo '<br/>';
				echo '<div style="display: inline-block" class="mx-10 store-items">';

				for($ctr = 0; $ctr < $resultCount; $ctr++) {

					$row = $result->fetch_assoc();

					if($ctr % 2 == 0) {

						echo'<a href ='.$row['link'].' style="color: black; decoration: none;"><div class="store-item color1">';
						echo '<b><div class="store-item-name">'.$row['name'].'</div></b>';
						echo '<br>';
						echo '<img class="store-item-image" src="'.$row['imageSrc'].'">';
						echo '<br>';
						echo '<br>';
						echo '<div class="store-item-details">';
						echo 'PHP <span class="store-item-price">'.$row['price'].'</span>';
						echo '</div>';
						echo '</div></a>';
					}

					else if($ctr % 2 == 1) {

						echo'<a href ='.$row['link'].' style="color: black; decoration: none;"><div class="store-item color2">';
						echo '<b><div class="store-item-name">'.$row['name'].'</div></b>';
						echo '<br>';
						echo '<img class="store-item-image" src="'.$row['imageSrc'].'">';
						echo '<br>';
						echo '<br>';
						echo '<div class="store-item-details">';
						echo 'PHP <span class="store-item-price">'.$row['price'].'</span>';
						echo '</div>';
						echo '</div></a>';
					}

				}

				echo '</div>';

			} catch (Exception $e) {
				echo $e->getMessage();
			}

			?>

	</div>

	<center>

	<div class="my-3">
		<a class="btn btn-secondary my-3" href="#navbar-div"> <i class="fas fa-arrow-circle-up"></i> &nbsp;Go Back To Top </a>
	</div>

	</center>
	</div>


</body>
</html>