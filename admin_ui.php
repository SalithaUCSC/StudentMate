<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page | StudentMate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<?php include('./import/admin.php'); ?>
</head>
<body>

	<div class="content">
        <header>
            <div class='nav'>
                <ul id='ul-nav'>
                  
                    <li class='home'><a href='#'>StudentMate</a></li>
                    <li class="logged">Logged in as <a href="admin_profile.php" id="user"><?php echo $_SESSION['username'];?></a></li>
                    <li><form method='POST' action='admin_ui.php'><input type='submit' name='out' class='btn' id='outbtn' value='LOG OUT'></form></li>
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


		<div class="midcontent">

			<div><center><h1>Welcome to Admin Page</h1></center></div>

				<div class="taskbox">
					<img src="./images/facad.png" class="task-image"><br>
					<a href="add_fac_admin.php"><h2>Add Faculty admins</h2></a>
					<p>Add Faculty admins to represent the faculties.</p>
					<br>
					<a href="add_fac_admin.php"><input type="button" class="btn2" id="enter-btn" value="ENTER"></a>
				</div>
				<div class="taskbox">
					<img src="./images/map.png" class="task-image"><br>
					<a href="add-fac-admin.php"><h2>Maintain Maps</h2></a>
					<p>Maintain maps when an update is needed.</p>
					<br>
					<input type="button" class="btn2" id="enter-btn" value="ENTER">
				</div>
				<div class="taskbox">
					<img src="./images/accomo.png" class="task-image"><br>
					<a href="add-fac-admin.php"><h2>Post Accomodation</h2></a>
					<p>Post a mesage about a place for students to stay.</p>
					<br>
					<a href="addaccomo.php"><input type="button" class="btn2" id="enter-btn" value="ENTER"></a>					
				</div>
				<div class="taskbox">
					<img src="./images/schol.png" class="task-image"><br>
					<a href="add-fac-admin.php"><h2>Post Scholarships</h2></a>
					<p>Post a message about a scholarship to be applied.</p>
					<br>
					<input type="button" class="btn2" id="enter-btn" value="ENTER">
				</div>
			</div>

		</div>

        <?php include('./import/footer.php'); ?>
</body>
</html>