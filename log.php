<?php
	session_start();
	require 'db_con.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	// echo $password;
	// die();
	//turning password into md5
	$password = md5($password);

	$userSQL = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

	$res = mysqli_query($conn,$userSQL);

	if (mysqli_num_rows($res) > 0){
		if($username == 'admin') {
			$_SESSION['username'] = $username;
			header("location:admin_ui.php");
		} elseif ($username == 'facadmin') {
			$_SESSION['username'] = $username;
			header("location:faculty_ui.php");	
		}  else {
			$_SESSION['username'] = $username;
        	header("location:homepage.php");
    	}
	}else{
		header("Location: index.php?error=1"); //error is for incorrect username or password
	}
?>