<?php
	session_start();
	require 'db_con.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile | StudentMate</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/profile.css">
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
							<table border=0>
							  	<tr>
									<td class='field'>Username : </td>
									<td class='field'>$row[0]</td>
								</tr>
								<tr>
									<td class='field'>Full Name : </td>
									<td class='field'>$row[1]</td>
								</tr>
								<tr>
									<td class='field'>Email : </td>
									<td class='field'>$row[2]</td>
								</tr>
								<tr>
									<td class='field'>Mobile No : </td>
									<td class='field'>$row[3]</td>
								</tr>
								<tr>
									<td class='field'>NIC: </td>
									<td class='field'>$row[4]</td>
								</tr>
							</table>
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