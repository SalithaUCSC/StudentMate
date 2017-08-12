<html>
    <head>
        <title>Home  | StudentMate</title>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <?php include('./import/css.php'); ?>
    </head>
    <body>
        <?php include('./import/nav.php'); ?>
        <!-- container 1 -->
        <div class="container">

	    	<div class='wrapper1'>
				<p>StudentMate is the ultimate platform built to help students after they have started their university lives.</p>
				<img src='./images/logoNew.png' id='logo'><br><br>
				<h2>SIGN IN <i class="fa fa-sign-in" aria-hidden="true"></i></h2>
			</div>

	        <div class='wrapper'>

		    <img src='./images/user1.png'>

			<form action='log.php' method="POST">
				<div class='form-input'>
					<input type='text' name='username' placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" class='form-input'>
				</div>
				<div class='form-input'>
					<input type='password' name='password' placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class='form-input'>
				</div><br>
				<input type='submit' name='log' value='LOGIN' class='btn' id='logbtn'><br><br>
				<a href="index.php"><input type='button' name='reset' value='RESET' class='btn' id='canbtn'></a><br>
			</form>
			<?php
            	if (isset($_GET['error'])){
            		if ($_GET['error'] == 1){
					echo "<h3 style='color:#D91E18;'>Invalid Credentials!</h3>";
				}
            	}

			?>
			</div>
		        	
        </div>

        <!-- container 2 -->
        <div class="container2">
        	<h1 class="try">Without an account you can try these options</h1>
        	<?php include('./import/box-wrap.php'); ?>
        </div>

        <?php include('./import/footer.php'); ?>
        

    </body>
</html>