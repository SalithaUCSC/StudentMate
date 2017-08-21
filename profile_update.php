<?php
	session_start();
	require 'db_con.php';

	$username = $_GET['username'];

	$sql = "SELECT * FROM customer WHERE username='$username'";

	$res = mysqli_query($conn,$sql);

	$user = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile | StudentMate</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/profile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		input {
			padding: 10px 20px;
		}
	</style>
</head>
<body>

	<div class="content">
        <header>
            <div class='nav'>
                <ul id='ul-nav'>
                  
                    <li class='home'><a href='homepage.php'>StudentMate</a></li>
                    
                    <li><form method='POST' action='homepage.php'><input type='submit' name='out' class='btn' id='outbtn' value='LOG OUT'></form></li>
                </ul>
          
            </div>
        </header>
		<div class="midcontent">
		<center><p  id="backhome"><a href="homepage.php">BACK TO HOME</a></p></center>
		    <div class='wrapper'>
		   
		    <img src='./images/user1.png'><br><br>

		<?php
			$sql = "SELECT * FROM customer WHERE username='$_SESSION[username]'";

			$res = mysqli_query($conn,$sql);

			if($res){
				while($row = mysqli_fetch_row($res)){
					echo "<div class='bio'>
                            <form action='update_user.php' method='POST'>
							<table border=0>
							  	<tr>
									<td class='field'>Username : </td>
									<td class='field'><input type='text' value='$row[0]' readonly name='username'></td>
								</tr>
								<tr>
									<td class='field'>Full Name : </td>
									<td class='field'><input type='text' value='$row[1]'  name='fname'></td>
								</tr>
								<tr>
									<td class='field'>Email : </td>
									<td class='field'><input type='email' value='$row[2]'  name='email'></td>
								</tr>
								<tr>
									<td class='field'>Mobile No : </td>
									<td class='field'><input type='text' value='$row[3]'  name='contact'></td>
								</tr>
								<tr>
									<td class='field'>NIC: </td>
									<td class='field'><input type='text' value='$row[4]'  name='nic'></td>
								</tr>
                                <tr>
                                    <td><input type='submit' name='reg' value='Update Profile' id='updatebtn'></td>
                                </tr>
							</table>
                            </form>
						</div>";
				}
			}
			else{
				die('No data in the table');
			}
		?>

			</div>
		<?php include('./import/footer.php'); ?>
		</div>
              
</body>
</html>