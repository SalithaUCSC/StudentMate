<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <a class="navbar-brand" href="<?php echo site_url('User'); ?>" style="font-size :30px;">STUDENTMATE</a>
      </nav>

      <div id="page-wrapper">
          <div class="row">
            <div class="col-md-3"></div>
            <!-- <div class="thumbnail"> -->
              <div class="col-lg-6">
                <div class='panel panel-default'>
                    <div class='panel-body'>
                  <h2>Register in the system</h2><br>

                  <ol class="breadcrumb">
                    <li><i class="fa fa-file" aria-hidden="true"></i> Fill the registration form and submit</li>
                  </ol>
                  <br>
                  <img src='<?php echo base_url(); ?>/assets/images/user1.png' style="width: 120px; height: 120px; margin: auto; display: block;"><br><br>

                  <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>','</div>'); ?>

                  <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                            <?php echo $this->session->flashdata('success');?>
                    </div>
                  <?php endif; ?>

                  <?php echo form_open('Users/registerUser'); ?>

                    <div class="form-group">
                    <label>Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                    <label>Full Name</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="contact">
                    </div>
                    <div class="form-group">
                      <select name="faculty">
                        <option selected="selected" disabled="disabled">Select your faculty</option>
                        <option value="ucsc">ucsc</option>
                        <option value="mgt">mgt</option>
                        <option value="science">science</option>
                        <option value="arts">arts</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Index Number</label>
                        <input type="text" class="form-control" name="indexno">
                    </div>
                    <div class="form-group">
                        <label>Profile Picture</label>
                        <input type="file" class="form-control" name="avatar">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" onkeyup='check();'>
                    </div>
                    <span id='message'></span><br><br>
                    <button class="btn btn-primary" type="submit" name="clubreg">Register</button>
                    <a href="<?php echo site_url('User') ?>" class="btn btn-link">Back to Login</a><br><br>

                <?php echo form_close(); ?>

              </div>

              <div class="col-md-3"></div>
          </div>
          </div>
          </div>
        </div>

    <footer>
        <p class="text-right">&copy StudentMate 2017</p>
    </footer>
    <!-- JavaScript -->
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
