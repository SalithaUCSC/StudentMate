<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'studentmate';

	$conn = mysqli_connect($server,$username,$password,$db);
		if (!$conn){
			die('Database connection error!'.mysqli_connect_error());
		}

?>