	<?php

		session_start();
		require 'db_con.php';


		$faculty = $_POST['faculty'];
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];

		$pwd = md5($pwd);

		$sql = "SELECT * FROM fac_admins WHERE faculty='$faculty' AND username='$username' AND password='$pwd'";
		
		$res = mysqli_query($conn,$sql);


		if ($res) {
			
			if (mysqli_num_rows($res)>0) {
			
				$_SESSION['username'] = $username;
				$_SESSION['faculty'] = $faculty;
				header("location:facadmin_ui.php");
			}
				
			else {
			echo "error";
		}
}	 
?>