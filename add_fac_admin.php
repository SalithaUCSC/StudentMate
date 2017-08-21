<?php
	session_start();
	require 'db_con.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Faculty Admins | StudentMate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<?php include('./import/add-fac-admin.php'); ?>
</head>
<body>

	<div class="content">
        <header>
            <div class='nav'>
                <ul id='ul-nav'>
                  
                    <li class='home'><a href='admin_ui.php'>StudentMate</a></li>
                    <li class="logged">Logged in as <a href="admin_profile.php" id="user"><?php echo $_SESSION['username'];?></a></li>
                    <li><form method='POST' action='homepage.php'><input type='submit' name='out' class='btn' id='outbtn' value='LOG OUT'></form></li>
                </ul>
          
            </div>
        </header>

		<div class="midcontent">
		<center><h1>Add Faculty Admins</h1></center>
		    <div class='wrapper'><br><br>
		    <img src='./images/user1.png'><br><br>
		    
			<form action='add_fac_admin.php' method="POST">
				<label>Username</label>
				<div class='form-input'>
					<input type='text' name='username' placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" class='form-input' required="required">
				</div>
				<br>
				<label>Full Name</label>
				<div class='form-input'>
					<input type='text' name='fname' placeholder="Ex: Lahiru Perera" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ex: Lahiru Perera'" class='form-input' required="required">
				</div>
				<br>
				<label>Faculty</label>
				<div class='form-input'>
					<!-- <input type='text' name='faculty' placeholder="Faculty Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Faculty Name'" class='form-input' required="required"> -->
					<center><select name="faculty" style="margin-left: 100px; padding: 10px 30px;" required="required">
						<option value="ucsc">ucsc</option>
						<option value="mgt">mgt</option>
						<option value="science">science</option>
						<option value="arts">arts</option>
					</select></center>
				</div>
				<br>
				<label>email</label>
				<div class='form-input'>
					<input type='email' name='email' placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" class='form-input' required="required">
				</div>
				<br>
				<label>Contact Number</label>
				<div class='form-input'>
					<input type='text' name='contactno' placeholder="Mobile Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Phone'" class='form-input' required="required">
				</div>
				<br>
				<label>Password</label>
				<div class='form-input'>
					<input type='password' name='password' placeholder="Type a password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type a password'" class='form-input' id="password" required="required">
				</div>
				<br>
				<label>Confirm Password</label>
				<div class='form-input'>
					<input type='password' name='cpassword' placeholder="Retype password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Retype the password'" class='form-input' id="cpassword" required="required" onkeyup='check();'>
				</div>
				<br>
				<span id='message'></span><br><br>
				<input type='submit' name='reg' value='ADD ADMIN' class='btnr' id='regbtn'><br>
				<a href="add_fac_admin.php"><input type='button' name='reset' value='RESET' class='btnr' id='canbtn'></a><br>
			</form>

			<?php
			if (isset($_POST['reg'])) {

				$username = $_POST['username'];
				$fname = $_POST['fname'];
				$faculty = $_POST['faculty'];
				$email = $_POST['email'];
				$contactno = $_POST['contactno'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];

				$password = md5($password);

		

		$query1 = "SELECT username FROM fac_admins WHERE username = '$username'";

		$query_run1 = mysqli_query($conn , $query1);


		if (mysqli_num_rows($query_run1)>0) {

			echo "<div class='usererror'>This Faculty Admin is already registered! Click Reset</div><br>";

		} else {

				$query2 = "INSERT INTO fac_admins VALUES ('$username','$fname','$faculty','$email','$contactno','$password')";
				$query_run2 = mysqli_query($conn,$query2);

				$query3 = "INSERT INTO users VALUES ('$username','$password')";

					$query_run3 = mysqli_query($conn,$query3);

					if ($query_run2 && $query_run3) {
						echo "<div class='usersuc'>Faculty Admin is added!<br>";
					}
					
					else {
					echo "<div class='usererror'>Error in adding admin! Click Reset</div><br>";
 					}
			}
		
	}
		?>

			</div>
		</div>
        <script type="text/javascript">
    	var check = function() {
		  if (document.getElementById('password').value ==
		    document.getElementById('cpassword').value) {
		    document.getElementById('message').style.color = 'green';
		    document.getElementById('message').innerHTML = 'Password matching';
		  } else {
		    document.getElementById('message').style.color = 'red';
		    document.getElementById('message').innerHTML = 'Password not matching';
		  }
		}
    </script>
			<?php include('./import/footer.php'); ?>
	              
</body>
</html>