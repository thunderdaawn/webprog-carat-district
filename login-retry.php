<!DOCTYPE html>
<html>

<head>
	<title> Carat District: Login Retry </title>


	<?php
		require_once('service/cart-service.php');
		require_once('view-comp/header.php');
	?>
	
</head>

<body>

	<!-- Navigation Bar -->
	
	<nav style="background-color: pink; padding: 8px; text-align: right; padding-right: 20px;">
			
		<!-- Login Button -->	
		<a class="btn" href="login.php" style="background-color: #6DB6CB; color: white;"><b>LOGIN</b></a>

		&nbsp;

		<!-- Register Button-->
		<a class="btn" href="register.php" style="background-color: #6DB6CB; color: white;"><b>REGISTER</b></a>

	</nav>

	<br>
	<br>
	<br>
	<br>

	<center>
	<div class="row" style="width: 95%; padding-left: 10px;">
	
		<div class="col-sm-7">
				<img src="images/index.png" style="height: 350px; width: 700px;">
		</div>

		<div class="col-sm-4 mx-5" style="background-color: #C4C1E5;">

			<br>
			<h3 style="background-color: white; padding:10px; color: #5D5A80;"><b>LOGIN</b></h3>
			<br>


			<form action = "login-validation.php" method="post" id="login-form">

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: center; align-items: left; padding-top:2px;">
					<label for="username"><b>Username:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" name="username" class="form-control col-7 username" placeholder="Username" required>
				</span>

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: center; align-items: left; padding-top:2px;">
					<label for="password"><b>Password:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="password" name="password" class="form-control col-7 password" placeholder="Password" required>
				</span>

				<p style="margin-top: 15px;"><i> Incorrect Username or Password. Please Try Again. </i></p>

				<button type="submit" class="btn my-3" style="background-color: #5D5A80; color: white;"><b>Login To Carat District</b></button>
				
			</form>
		</div>
	</div>
</center>

</body>
</html>