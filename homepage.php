<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page | StudentMate</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/sidebar.css">
	<?php include('./import/home.php'); ?>
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
				<li class="active"><a href="homepage.php">Home</a></li>
				<li><a href="#">Accomodation</a></li>
				<li><a href="#">Scholarships</a></li>
				<li><a href="clubs.php">Clubs</a></li>
				<li><a href="#">Timetable</a></li>
			</div>
		</div>

		<div class="midcontent">
			<h1 id="recent">RECENT NEWS</h1>
				<div class="newspost">
					<div><img src="./images/user1.png" id="author"></div>
					<div id="status"><p>Title</p><p>Date</p><p>Time</p></div>
					<div id="newscontent">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat ornare orci sollicitudin tempus. Ut vehicula neque nec ligula malesuada consectetur. Nulla mollis, orci quis luctus pulvinar, elit diam viverra ex, non tempus magna turpis nec augue. Donec eu mi tempor, malesuada quam in, varius est. Suspendisse dictum sit amet magna interdum interdum. Quisque finibus eget lectus quis sollicitudin. Etiam lacinia ligula eu lacus hendrerit, ut dapibus ligula cursus. Donec ac eros ligula. Mauris eu dignissim nunc, sed eleifend lorem. Quisque cursus felis et efficitur porttitor. Proin sed est consequat, rutrum purus eu, volutpat odio.</p>
					</div>
				</div>
								<div class="newspost">
					<div><img src="./images/user1.png" id="author"></div>
					<div id="status"><p>Title</p><p>Date</p><p>Time</p></div>
					<div id="newscontent">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat ornare orci sollicitudin tempus. Ut vehicula neque nec ligula malesuada consectetur. Nulla mollis, orci quis luctus pulvinar, elit diam viverra ex, non tempus magna turpis nec augue. Donec eu mi tempor, malesuada quam in, varius est. Suspendisse dictum sit amet magna interdum interdum. Quisque finibus eget lectus quis sollicitudin. Etiam lacinia ligula eu lacus hendrerit, ut dapibus ligula cursus. Donec ac eros ligula. Mauris eu dignissim nunc, sed eleifend lorem. Quisque cursus felis et efficitur porttitor. Proin sed est consequat, rutrum purus eu, volutpat odio.</p>
					</div>
				</div>
		</div>

        <?php include('./import/footer.php'); ?>
</body>
</html>
