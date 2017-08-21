<?php
	require 'db_con.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration | StudentMate</title>
	<?php include('./import/css.php'); ?>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="nav">
            <ul id="ul-nav">             
                <li class="home"><a href="index.php">StudentMate</a></li>      
            </ul>
        </div>
    </header>
<div class="regbody">
    <div class="wrapper3">
    	<br><br>
		<img src='./images/logoNew.png' id='logo'>
    	<div class="list">
    		<ul>
    			<li><i class="fa fa-home" aria-hidden="true"></i></li>
    			<li><i class="fa fa-graduation-cap" aria-hidden="true"></i></li>
    			<li><i class="fa fa-university" aria-hidden="true"></i></li>
    		</ul>
    	</div>
    	<div class="needs">
    		<ul>
    			<li>Need Accomodation?</li>
    			<li>Want to find scholarships?</li>
    			<li>Want to join clubs?</li>
    		</ul>
    	</div>

    	<h2 style="color: #185E9C;">Sign up quickly  <i class="fa fa-hand-o-right" aria-hidden="true"></i></h2>
    </div>

	<div class='wrapper2'>

	    <img src='./images/user1.png'>

		<form method="POST" action="reg.php">

			<div class='form-input'>
				<input type='text' name='username' placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" class='form-input2' required="required">
			</div>
			<div class='form-input'>
				<input type='text' name='fname' placeholder="Full name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full name'" class='form-input2' required="required">
			</div>
<!-- 		<div class='form-input'>
				<input type='text' name='faculty' placeholder='Faculty' class='form-input2' required="required">
			</div>
			<div class='form-input'>
				<input type='text' name='degree' placeholder='Degree' class='form-input2' required="required">
			</div> -->
			<div class='form-input'>
				<input type='email' name='email' placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class='form-input2' required="required">
			</div>
			<div class='form-input'>
				<input type='text' name='contact' placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" class='form-input2' required="required">
			</div>
			<div class='form-input'>
				<input type='text' name='nic' placeholder="National ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'National ID'" class='form-input2' required="required">
			</div><br><br>
<!--            <input type='file' name='avatar' required="required">-->
			<div class='form-input'>
				<input type='password' name='password' id="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class='form-input2' required="required">
			</div>
			<div class='form-input'>
				<input type='password' name='cpassword' id="cpassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" class='form-input2' required="required" onkeyup='check();'>
			</div><br>
 			
				
			 
			<span id='message'></span><br><br>
			<input type='submit' name='reg' value='SIGN UP' class='btn' id='logbtn'><br><br>
		
			<a href="index.php"><input type="button" name="back" value="Back to Login" id="canbtn" class="btn"></a>

			<a href="reg.php"><input type='button' name='reset' value='RESET' class='btn' id='canbtn'></a><br>	
		</form>
		<?php
			if (isset($_POST['reg'])) {

				$username = $_POST['username'];
				$name = $_POST['fname'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$nic = $_POST['nic'];
//                $avatar = $target_file_user;
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];


	

			if ($password == $cpassword) {
				$password = md5($password);
				$query1 = "SELECT * FROM users WHERE username='$username'";
				$query_run1 = mysqli_query($conn , $query1);

				if (mysqli_num_rows($query_run1)>0) {

					echo "<div class='msg' id='errmsg'>User already exists! Click Reset</div><br>";
				} else {

					$query2 = "INSERT INTO customer VALUES ('$username','$name','$email','$contact','$nic')";
					$query_run2 = mysqli_query($conn,$query2);

					$query3 = "INSERT INTO users VALUES ('$username','$password')";
					$query_run3 = mysqli_query($conn , $query3);

					if ($query_run2 && $query_run2) {
						echo "<div class='msg' id='sucmsg'>User registered!</div><br>";
					} else {
						echo "<div class='msg' id='errmsg'>Error in Registration! Click Reset</div><br>";
					}
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