<?php
	# Stop Hacking attempt
	if(!defined('__APP__')) {
		die("Hacking attempt");
	}
	
	# Connect to MySQL database
	$MySQL = mysqli_connect("localhost","id4356488_root","roottoor","id4356488_webprog") or die('Error connecting to MySQL server.');