<?php
mysqli_select_db($db, 'carat_district');
     	$username = $_SESSION['username'];
     	$sql = "SELECT * from users where username = '$username'";
     	$result = mysqli_query($db, $sql);
		if(mysqli_num_rows($result) > 0){
			
			$row = mysqli_fetch_array($result);
			$address = $row['address'];
			if($address != null ){
					$theAddress = $address;
					// $_SESSION['address'] = $address;
			}
			else{
					$theAddress = "";
			}
		}	
  ?>