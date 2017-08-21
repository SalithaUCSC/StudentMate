<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Clubs | StudentMate</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/clubs.css">
	<link rel="stylesheet" type="text/css" href="./css/sidebar.css">
	<?php include('./import/home.php'); ?>

	</style>
</head>
<body>

	<div class="content">
        <header>
            <div class='nav'>
                <ul id='ul-nav'>
                  
                    <li class='home'><a href='#'>StudentMate</a></li>
                    <li class="logged">Logged in as <a href="profile.php" id="user"><?php echo $_SESSION['username'];?></a></li>
                    <li><form method='POST' action='homepage.php'><input type='submit' name='out' class='btn' id='outbtn' value='LOG OUT'></form></li>
                </ul>
                <?php
					if (isset($_POST['out'])) 
					{
						session_destroy();
						header("location: index.php");
					}
				?>
            </div>
        </header>

		<div class="sidebar">
			<img src='./images/logoNew.png' id='logo'><br><br>

			<div class="options">
				<li><a href="homepage.php">Home</a></li>
				<li><a href="#">Accomodation</a></li>
				<li><a href="#">Scholarships</a></li>
				<li class="active"><a href="clubs.php">Clubs</a></li>
				<li><a href="#">Timetable</a></li>
			</div>
		</div>

		<div class="midcontent">
		<center><p  id='midtitle'>NEW RECRUITEMENTS FOR CLUBS AND SOCIETIES</p></center>
				<div class="clubpost">

					<div id="clubcontent">
						<div id="club"><a href="clubReg.php"><p>Club 1</p></a></div><div>
						<center><div><a href="clubReg.php"><input type="submit" name="more" value="Register" class="btnclub" id="clubreg"></div></center>
					</div>
				</div>
				<div class="clubpost">

					<div id="clubcontent">
						<div id="club"><a href="club1.php"><p>Club 2</p></a></div><div>
						<center><div><a href="clubReg.php"><input type="submit" name="more" value="Register" class="btnclub" id="clubreg"></div></center>
					</div>
				</div>
				<div class="clubpost">

					<div id="clubcontent">
						<div id="club"><a href="clubReg.php"><p>Club 3</p></a></div><div>
						<center><div><a href="clubReg.php"><input type="submit" name="more" value="Register" class="btnclub" id="clubreg"></div></center>
					</div>
				</div>


		</div>
		
	</div>
</body>
</html>