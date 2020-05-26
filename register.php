<!DOCTYPE html>
<html>

<head>
	<title> Carat District: Register </title>

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


	<center>
	<div class="row" style="width: 100%;">
	
		<div class="col-sm-7" style="margin-left: 10px;">
				<br>
				<br>
				<br>
					<img src="images/index.png" style="height: 400px; width: 700px; margin: 10px;">
				<br>
				<br>
				<br>


		</div>

		<div class="col-sm-4" style="background-color: #C4C1E5; margin-left: 60px; margin-top: 25px;">

			<br>
			<h3 style="background-color: white; padding:8px; color: #5D5A80; margin-bottom: 25px;"><b>REGISTER</b></h3>

			<form action = "registration-validation.php" method="post" id="login-form">

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; padding-top:2px; margin-top: 10px;">
					<label for="first_name"><b>First Name:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" name="first_name" class="form-control col-8 first_name" placeholder="First Name" required>
				</span>

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; padding-top:2px;">
					<label for="middle_name"><b>Middle Name:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" name="middle_name" class="form-control col-8 middle_name" placeholder="Middle Name">
				</span>

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; padding-top:2px;">
					<label for="last_name"><b>Last Name:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" name="last_name" class="form-control col-8 last_name" placeholder="Last Name" required>
				</span>

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; padding-top:2px;">
					<label for="suffix"><b>Suffix:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" name="suffix" class="form-control col-8 suffix" placeholder="Suffix">
				</span>

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; padding-top:2px;">
					<label for="email"><b>Email:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="email" name="email" class="form-control col-8 email" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" placeholder="Email" required>
				</span>

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; padding-top:2px;">
					<label for="username"><b>Username:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="username" name="username" class="form-control col-8 username" placeholder="Username" required>
				</span>

				<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; padding-top:2px;">
					<label for="last_name"><b>Password:&nbsp;&nbsp;&nbsp;</b></label>
					<input type="password" name="password" class="form-control col-8 password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
				</span>

				<button type="submit" class="btn my-4" style="background-color: #5D5A80; color: white;"><b>Register For Carat District</b></button>
				
			</form>
		</div>
	</div>
</center>

</body>
</html>