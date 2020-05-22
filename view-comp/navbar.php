<nav style="background-color: pink; padding: 8px;">

	<a href="index.php" onclick="goBackFunction()"><img src="images/carat-district-logo.png" style="height:55px; width: 500px;"></a>

	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
	&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp;
	
	<button class="btn btn-info" type="button" style="background-color: #a3a7c9; border-style: none;" data-toggle="modal" data-target="#modal-view-cart">
	<i class="fas fa-shopping-cart""></i> <sup class="total-num-cart">0</sup></button></a>

	&nbsp; &nbsp;


	<!-- Username -->
	<span class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #a3a7c9; border-style: none; align-content: right;"> 
	  	<i class="fas fa-user-circle"></i> &nbsp; <b> <span class="username-show"><?php echo $_SESSION['username']; ?></span> </b> </button>
	  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    <a class="dropdown-item" href="logout.php" onclick="logoutFunction()">Logout</a>
	  </div>
	</span>
	</nav>