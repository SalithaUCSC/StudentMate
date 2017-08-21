<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty Admin Page | StudentMate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<?php include('./import/admin.php'); ?>
	<?php include('./import/add_news.php'); ?>
</head>
<body>

	<div class="content">
        <header>
            <div class='nav'>
                <ul id='ul-nav'>
                  
                    <li class='home'><a href='#'>StudentMate</a></li>
                    <li class="logged"><?php echo $_SESSION['faculty'];?>
                    <?php echo $_SESSION['username'];?></li>
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

			<div><center><h1>Faculty Admin</h1></center></div>
			
				<div class="taskbox">
					<img src="./images/clubs.png" class="task-image"><br>
					<a href="add_fac_admin.php"><h2>Manage Clubs</h2></a>
					<p>Add Faculty clubs for students to register.</p>
					<br>
					<a href="#"><input type="button" class="btn2" id="enter-btn" value="ENTER"></a>
				</div>
				<div class="taskbox">
					<img src="./images/news.png" class="task-image"><br>
					<a href="#"><h2>Add Faculty news</h2></a>
					<p>Add Faculty news to inform the faculty news.</p>
					<br>
					<a href="add_news.php"><input type="button" class="btn2" id="enter-btn" value="ENTER"></a>
				</div>
				<div class="taskbox">
					<img src="./images/table.png" class="task-image"><br>
					<a href="#"><h2>Manage Timetable</h2></a>
					<p>Maintain timetable.</p>
					<br>
					<input type="button" class="btn2" id="enter-btn" value="ENTER">
				</div>
			
			</div>

		</div>

        <?php include('./import/footer.php'); ?>
</body>
</html>