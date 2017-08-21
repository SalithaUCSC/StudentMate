<?php	
	session_start();
	require 'db_con.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty News | StudentMate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<?php include('./import/admin.php'); ?>
	<?php include('./import/add_news.php'); ?>

	<script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
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
		<center><p  id="backhome"><a href="facadmin_ui.php">BACK TO HOME</a></p></center>
			<div><center><h1 style="margin-top: 10px; margin-bottom: 50px;">Post News for faculty</h1></center></div>

			<div class="post">
<form action="add_news.php" method="POST">

	<table class="news-tab">
		<tr>
			<td><label>Faculty</label></td>
			<td><input type="text" name="tfaculty" class="news-input" id="news-title" value=<?php echo $_SESSION['faculty'];?> readonly></td>
		</tr>
		<tr>
			<td><label>Title</label></td>
			<td><input type="text" name="tname" class="news-input" id="news-title" required="required"></td>
		</tr>
		<tr>
			<td><label>Date</label></td>
			<td><input type="date" name="date" class="news-input" id="news-date" required="required"><br></td>
		</tr>
		<tr>
			<td><label>Time</label></td>
			<td><input type="time" name="time" class="news-input" id="news-content" required="required"><br></td>
		</tr>
		<tr>
			<td><label>Content</label></td>
			<td><textarea name="content"></textarea></td>
		</tr>
		<tr>
			</tr>
	</table>
		
			<div class="btns">
				<input type="submit" name="post" value="POST" class="newsbtn">
			<a href="add_news.php"><input type="button" name="reset" value="RESET" class="resetbtn"></a>
			</div>
	
</form>	

	
	
</div>

<?php

	require 'db_con.php';

if (isset($_POST['post'])) {

	// $newsid=$_POST['newsid'];
	// $tfaculty= $_POST['tfaculty'];	
	$tname= $_POST['tname'];
	$date= $_POST['date'];
	$time= $_POST['time'];
	$content= $_POST['content'];

		$q3 = "INSERT INTO news (`tname`, `date`, `time`, `content`) VALUES ('$tname
		','$date','$time','$content')";

		
		$q3run = mysqli_query($conn,$q3);
		// var_dump($q3);

		if ($q3run) {
			echo "<div id='publishmsg'>Post has been published</div>";
			
		} else {
			echo "<div id='errpubmsg'>Error in Posting</div>";
		}

}
?>
        <script>
            CKEDITOR.replace( 'content' );
        </script>


		</div>

        <?php include('./import/footer.php'); ?>
</body>
</html>