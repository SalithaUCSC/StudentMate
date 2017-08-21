<?php
	require 'db.php';
?>
			<?php
			if (isset($_POST['reg'])) {

				$target = "images/".basename($_FILES['image']['name']);
				
				$image = $_FILES['image']['name'];

			}
				$q = "INSERT INTO users VALUES ('$image')";
				$qrun = mysqli_query($conn,$q);

				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					echo "success";
				}
				else {
					echo "fail";
				}

				?>
<!DOCTYPE html>
<html>
<head>
	<title>image</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/club1.css">
</head>
<body>
			<form action='imageupload.php' method="POST">	
				<div class='form-input'>
					<input type='file' name='image' placeholder='Your Profile image' class='form-input' required="required">
				</div>
				<br>
				<input type='submit' name='reg' value='UPLOAD' class='btnr' id='regbtn'>
			</form>

</body>
</html>