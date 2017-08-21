<?php
	session_start();
	require 'db_con.php';
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
			<p id="recent">RECENT ANNOUNCEMENTS</p>
<?php

$sql = "SELECT * FROM news ORDER BY newsid DESC";

$res2 = mysqli_query($conn,$sql);


foreach($res2 as $row){
	echo "
				
					<div><img src='./images/admin.png' id='author'></div>
					<div id='status'><p id='tname'>"; echo $row['tname']; echo "</p><p>"; echo $row['date']; echo "</p><p>"; echo $row['time']; echo  "<p id='adm'>Posted by ADMIN</p>"; echo "</div>
					<div id='newscontent'>
						<p>"; echo $row['content']; echo "</p>
					</div>
				";


}

?>

		</div>

        <?php include('./import/footer.php'); ?>
</body>
</html>
