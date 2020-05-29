<!DOCTYPE html>
<html>
<head>
	<title> Carat Fandom Hub: Search </title>
	
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

		<center>
		<div class="store-items">

			<?php

				$searchTerm = $_POST['searchTerm'];

				try {
			
					if(!$searchTerm) {
						throw new Exception('You have not entered search fields. Please go back and try again.');
					} 

					@ $db = new mysqli('127.0.0.1:3306', 'root', '', 'carat_district');

					$dbError = mysqli_connect_errno();

					if($dbError) {
						throw new Exception('Error: Could not connect to database. Please try again later. '.$dbError, 1);
					}

					$query = 'SELECT name, link, imageSrc, price FROM products WHERE name like \'%'.$searchTerm.'%\';';

					$result = $db->query($query);
					$resultCount = $result->num_rows;

					echo '<br/>';

					echo '<div style="background-color: white;">';
					echo '<p class="mx-3" style="padding: 4px;"><i>Search result for </i>: <b>'.$searchTerm.'</b></br>';
					echo '<i>Number of products found: </i><b>'.$resultCount.'</b></br></p>';
					echo '</div>';

					echo '</div>';
					echo '<div style="display: inline-block" class="mx-10 store-items">';

					for($ctr = 0; $ctr < $resultCount; $ctr++) {

						$row = $result->fetch_assoc();
	
						if($ctr % 2 == 0) {

							echo'<a href ='.$row['link'].'><div class="store-item color1">';
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

							echo'<a href ='.$row['link'].'><div class="store-item color2">';
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
				<div class="mx-3">
					<a class="btn btn-secondary my-3" href="index.php"> Go Back </a>
				</div>

			</center>

		</div>

	</div>

</body>
</html>				
