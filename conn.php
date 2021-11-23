<?php
	$conn = mysqli_connect('localhost', 'root', '', 'videoportal');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}