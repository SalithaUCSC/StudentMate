<?php

	require("db_con.php");

    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $nic = $_POST['nic'];

	$sql = "UPDATE customer SET fname = '$fname', email = '$email', contact = '$contact', nic = '$nic' WHERE username = '$username'";

	$res = mysqli_query($conn,$sql);

	if (!$res){
		echo "Not Updated";
	}else{
		echo "<script>
                alert(\"Profile has been updated\");
                window.location = \"profile.php\";
            </script>";
	}
?>