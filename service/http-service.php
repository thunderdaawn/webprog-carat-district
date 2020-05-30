<?php
if(@ $_SERVER['HTTPS'] == "on") {
		header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit;
	}
?>
