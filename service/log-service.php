<?php

	function loginLogMessage($username) {
		$documentRoot = $_SERVER['DOCUMENT_ROOT'];
		$ipAddress = $_SERVER['REMOTE_ADDR'];

		error_log(date('H:i, jS F Y').' - '.$ipAddress.' : '.$username.' logged into Carat District.' , 
			3, 
			$documentRoot.'/../apache/logs/info.log'
		); 
	}

	function registerLogMessage($username) {
		$documentRoot = $_SERVER['DOCUMENT_ROOT'];
		$ipAddress = $_SERVER['REMOTE_ADDR'];

		error_log(date('H:i, jS F Y').' - '.$ipAddress.' : '.$username.' registered for Carat District.' , 
			3, 
			$documentRoot.'/../apache/logs/info.log'
		); 
	}

	function addToCartLogMessage($username) {
		$documentRoot = $_SERVER['DOCUMENT_ROOT'];
		$ipAddress = $_SERVER['REMOTE_ADDR'];

		error_log(date('H:i, jS F Y').' - '.$ipAddress.' : '.$username.' added a product to their cart.' , 
			3, 
			$documentRoot.'/../apache/logs/info.log'
		); 
	}

	function editCartLogMessage($username) {
		$documentRoot = $_SERVER['DOCUMENT_ROOT'];
		$ipAddress = $_SERVER['REMOTE_ADDR'];

		error_log(date('H:i, jS F Y').' - '.$ipAddress.' : '.$username.' edited the products in their cart.' , 
			3, 
			$documentRoot.'/../apache/logs/info.log'
		); 
	}

	function checkoutLogMessage($username) {
		$documentRoot = $_SERVER['DOCUMENT_ROOT'];
		$ipAddress = $_SERVER['REMOTE_ADDR'];

		error_log(date('H:i, jS F Y').' - '.$ipAddress.' : '.$username.' confirmed their Carat District purchase.' , 
			3, 
			$documentRoot.'/../apache/logs/info.log'
		); 
	}

?>