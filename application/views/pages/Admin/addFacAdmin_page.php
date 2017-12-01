<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    </head>
    <style type="text/css">
      .panel-footer a {
        color: black;
      }
      .panel-footer a:hover {
        color: grey;
      }
    </style>
  <body>

    <div id="wrapper">

      <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('FacAdmin/facHome') ?>" style="font-size: 25px;">STUDENTMATE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

          <ul class="nav navbar-nav side-nav">
                <img src="<?php echo base_url() ?>assets/images/logoNew.png" alt="logo" class="logo">
            <li><a href="<?php echo site_url("Admin") ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#"><i class="fa fa-user-plus"></i>Add Faculty Admin</a></li>
            <li><a href="<?php echo site_url("Admin/add_Scholarship") ?>"><i class="fa fa-graduation-cap"></i>Add Scholarships</a></li>
            <li><a href="<?php echo site_url("Admin/add_Accomodation") ?>"><i class="fa fa-home"></i>Add Accomodation</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-map-marker"></i> Manage Maps</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user" style="color: black;">
              <li><a href="<?php echo site_url('Admin/AdminProfile') ?>"><i class="fa fa-user"></i>Admin Profile</a></li>
              <li><a href="<?php echo site_url('Admin/signout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

        <div id="page-wrapper">

          <div class="row">
            <div class="col-lg-12">
              <h2>System Admin Dashboard</h2><br>

              <ol class="breadcrumb">
                <li class="active"><i class="fa fa-user-plus"></i>Add Faculty Admins</li>
              </ol>
            </div>
          </div>


          <div class="row">
            <div class="col-md-3"></div>
              <div class="col-lg-6">
                <br>
                <img src='<?php echo base_url(); ?>/assets/images/fadmin.png' style="width: 120px; height: 120px; margin: auto; display: block;"><br><br>

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

                <?php echo form_open('Admin/addFacAdmin'); ?>

                  <div class="form-group">
                  <label>Username</label>
                      <input type="text" class="form-control" name="username">
                  </div>
                  <div class="form-group">
                  <label>Full Name</label>
                      <input type="text" class="form-control" name="fname">
                  </div>
                  <div class="form-group">
                      <label>Faculty</label>
                      <input type="text" class="form-control" name="faculty">
                  </div>
                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                      <label>Contact</label>
                      <input type="text" class="form-control" name="contactno">
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
                  <button class="btn btn-primary" type="submit" name="addfac">Add Faculty Admin</button>
                  <a href="<?php echo site_url('Admin') ?>" class="btn btn-link">Back to Home</a><br><br>

              <?php echo form_close(); ?>

            </div>
            <div class="col-md-3"></div>
          </div>

        </div>
      </div><!-- /#wrapper -->

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
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
