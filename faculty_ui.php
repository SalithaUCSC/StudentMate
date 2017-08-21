<?php	
	
	require 'db_con.php';
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
                  
                    <li class='home'><a href='faculty_ui.php'>StudentMate</a></li>
                    <li class="logged">Faculty Admins</li>
                    <li><form method='POST' action='#'><input type='submit' name='out' class='btn' id='outbtn' value='LOG OUT'></form></li>
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


		<div class="midcontent" style="height: 510px;">

			<div style="margin-top: 100px; margin-bottom: 50px;"><center><h1>Faculty Admin Navigation</h1></center></div>

			<form action="faculty_ui.php" method="POST">
				<table class="factab">
				<tr>
					<td><label>Faculty :</label></td>
					<td><select name="faculty" style="width: 205px;" required="required">
						<option value="ucsc">ucsc</option>
						<option value="mgt">mgt</option>
						<option value="science">science</option>
						<option value="arts">arts</option>
					</select></td>
				</tr>
				<tr>
					<td><label>Username :</label></td>
					<td><input type="text" name="username" style="width: 180px;" required="required"></td>
				</tr>
				<tr>
					<td><label>Password :</label></td>
					<td><input type="password" name="pwd" style="width: 180px;" required="required"></td>
				</tr>
				</table>
			
			<input type="submit" name="faclog" class="facbtn" value="LOGIN">

			</form>

			<?php
			session_start();
			if (isset($_POST['faclog'])) {

				$faculty = $_POST['faculty'];
				$username = $_POST['username'];
				$pwd = $_POST['pwd'];

				$pwd = md5($pwd);

				$sql = "SELECT * FROM fac_admins WHERE faculty='$faculty' AND username='$username' AND password='$pwd'";
				
				$res = mysqli_query($conn,$sql);


				if ($res) {
			
					if (mysqli_num_rows($res)>0) {
					
						$_SESSION['username'] = $username;
						$_SESSION['faculty'] = $faculty;
						header("location:facadmin_ui.php");
					}
						
					else {
					echo "error";
					}
		}
	}
			?>
		</div>
</div>

        <?php include('./import/footer.php'); ?>
</body>
</html>