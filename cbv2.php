<!DOCTYPE HTML>

<head>
	<title> Products: Carat Bong V2 </title>

	<?php
		session_start();
		require_once('service/cart-service.php');
		require_once('view-comp/header.php');
	?>

	<link rel="stylesheet" type="text/css" href="CSS/page-style.css">

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

	<br>
	<br>
		<a href="index.php" onclick="goBackFunction()"><div class="float-left y-10" style="padding-left: 25px;">
			<button class="btn btn-info">
			<i class="fas fa-arrow-circle-left"></i> </i> &nbsp;
			<span style="font-size: 15px"> Back to Home </span> </button> 
		</div></a>
	
	<center>
	<div class = "container" style="padding: 10px;">

		<br>
		<br>
		<br>
		<br>

		<?php

			try {

				require_once('service/db-connection-service.php');
				
				$query = 'SELECT name, img_src, price, description FROM products WHERE id = 17';

				$result = $db->query($query);

				$row = $result->fetch_assoc();

		?>

		<div class="row">

			<div class="col col-6">

				<img src = <?php echo $row['img_src']; ?> class="store-item-image" style="height: 300px; width: 300px;">

			</div>

			<div class="col col-5 add-to-cart-div" onload="displayAddToCart()">
				<h1 class="store-item-name my-2"><?php echo $row['name'] ?></h1>
				<h4 style="color:#3B3854;" class="mx-2"><b>PHP <span class="store-item-price"><?php echo $row['price']; ?></span></b></h4>
				<p class="my-4" style="font-size: 14px;"><i><?php echo $row['description']; ?></i></p>
				
				<?php
					if(isset($_SESSION['username'])) {
						require_once('view-comp/add-to-cart.php');
					}
				?>

			</div>

		</div>

		<?php

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		?>

	</div>
</center>


</body>
</html>