<?php
	session_start();
	require 'db_con.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Clubs | StudentMate</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/club1.css">
</head>
<body>

	<div class="content">
        <header>
            <div class='nav'>
                <ul id='ul-nav'>
                  
                    <li class='home'><a href='homepage.php'>StudentMate</a></li>
                    <li class="logged">Logged in as <a href="profile.php" id="user"><?php echo $_SESSION['username'];?></a></li>
                    <li><form method='POST' action='homepage.php'><input type='submit' name='out' class='btn' id='outbtn' value='LOG OUT'></form></li>
                </ul>
          
            </div>
        </header>

		<div class="midcontent">
		    <div class='wrapper'>
		    <img src='./images/user1.png'><br><br>
		    
			<form action='clubReg.php' method="POST">
				<label>Username</label>
				<div class='form-input'>
					<input type='text' name='username' placeholder='Registered username in the system' class='form-input' required="required">
				</div>
				<br>
				<label>Full Name</label>
				<div class='form-input'>
					<input type='text' name='fname' placeholder='Ex: Lahiru Perera' class='form-input' required="required">
				</div>
				<br>
				<label>Index Number</label>
				<div class='form-input'>
					<input type='text' name='indexno' placeholder='Ex: 15020101' class='form-input' required="required">
				</div>
				<br>
				<div class='form-input' required="required">
					<select class='form-input' name="clubname">
						<option>Select the club</option>
						<option value="ieee">IEEE Club</option>
						<option value="mozila">Mozila Club</option>
						<option value="compsoc">CompSoc</option>
						<option value="pahasara">Pahasara</option>
					</select>		
				</div>
				<br>
				<div class='form-input' required="required">
					<select class='form-input' name="gender">
						<option>Select your gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>		
				</div>
				<br>
				<label>Linkedin URL</label>
				<div class='form-input'>
					<input type='text' name='linkedin' placeholder='Give your Linkedin URL' class='form-input' required="required">
				</div>
				<br>
				<label>Facebook URL</label>
				<div class='form-input'>
					<input type='text' name='facebook' placeholder='Give your Facebook URL' class='form-input' required="required">
				</div><br>
				<input type='submit' name='reg' value='REGISTER' class='btnr' id='regbtn'><br>
				<a href="clubReg.php"><input type='button' name='reset' value='RESET' class='btnr' id='canbtn'></a><br>
			</form>

			<?php
			if (isset($_POST['reg'])) {

				$username = $_POST['username'];
				$fname = $_POST['fname'];
				$indexno= $_POST['indexno'];
				$clubname = $_POST['clubname'];
				$gender = $_POST['gender'];
				$linkedin = $_POST['linkedin'];
				$facebook= $_POST['facebook'];

		$q1c = "SELECT username FROM clubusers WHERE username = '$username'";

		$q1runc = mysqli_query($conn , $q1c);


		if (mysqli_num_rows($q1runc)>0) {

			echo "<div class='usererror'>This user has already registered! Click Reset</div><br>";

		} else {

			$q1 = "SELECT username FROM users WHERE username = '$username'";

			$q1run = mysqli_query($conn , $q1);


			if (mysqli_num_rows($q1run)>0) {

				$q3 = "INSERT INTO clubusers VALUES ('$username','$fname','$indexno','$clubname','$gender','$linkedin','$facebook')";
					$q3run = mysqli_query($conn,$q3);

					if ($q3run) {
						echo "<div class='usersuc'>User registered!<br>";
					}
					
				} else {
					echo "<div class='usererror'>Username is not valid! Click Reset</div><br>";
 
				}
			}
		}
		?>

			</div>
			<?php include('./import/footer.php'); ?>
		</div>
              
</body>
</html>