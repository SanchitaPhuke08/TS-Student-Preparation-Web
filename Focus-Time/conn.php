<?php
	$conn = new mysqli("localhost", "root", "", "tms");
 
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>