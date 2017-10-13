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
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> -->
    </head>
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
          <a class="navbar-brand" href="<?php echo site_url('Users/userHome') ?>" style="font-size: 25px;">STUDENTMATE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
              <img src="<?php echo base_url() ?>assets/images/logoNew.png" alt="logo" class="logo">
            <li><a href="<?php echo site_url("Users/userHome") ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url("Users/userAccommodation") ?>"><i class="fa fa-building"></i> Accomodation</a></li>
            <li><a href="<?php echo site_url("Users/userScholarships") ?>"><i class="fa fa-graduation-cap"></i> Scholarships</a></li>
            <li class="active"><a href="<?php echo site_url("Users/userClubs") ?>"><i class="fa fa-university"></i> Clubs</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-table"></i> Timetable</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user" style="color: black;">
                <li><a href="<?php echo site_url('Users/userProfile') ?>"><i class="fa fa-user"></i> <?php echo $_SESSION['username'];?></a></li>
                <li><a href="<?php echo base_url('Users/signout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h2>Register Here</h2><br>

            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-file" aria-hidden="true"></i> Fill the form to register</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3"></div>
            <div class="col-lg-6">
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

              <?php echo form_open('Users/clubRegUser'); ?>

                <div class="form-group">
                <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $_SESSION['username'] ?>" readonly="readonly">
                </div>
                <div class="form-group">
                <label>Full Name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $_SESSION['fname'] ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>">
                </div>
                <div class="form-group">
                <label>Faculty</label>
                    <input type="text" class="form-control" name="faculty" value="<?php echo $_SESSION['faculty'] ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['contact'] ?>">
                </div>
                <div class="form-group">
                    <label>Index Number</label>
                    <input type="text" class="form-control" name="indexno" value="<?php echo $_SESSION['indexno'] ?>">
                </div>
                <div class="form-group">
                  <select class="form-input" name="clubname" class="form-input">
                    <option value="" disabled="disabled" selected="selected"><?php echo "select the club" ?></option>
                    <?php if (count($clubData)): ?>

                      <?php foreach ($clubData as $row): ?>

                        <option value="<?php echo $row->c_value ?>"><?php echo $row->c_name ?></option>

                      <?php endforeach; ?>
                    <?php else: ?>
                        <option value=""><?php echo "no clubs" ?></option>
                    <?php endif ?>
                  </select>

                  <select class='form-input' name="gender">
                    <option selected="selected" disabled="disabled">Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Facebook URL</label>
                    <input type="text" class="form-control" name="facebook">
                </div>
                <div class="form-group">
                    <label>Linkedin URL</label>
                    <input type="text" class="form-control" name="linkedin">
                </div>
                <button class="btn btn-primary" type="submit" name="clubreg">Register</button>
                <a href="<?php echo site_url('Users/userClubs') ?>" class="btn btn-link">Back to Clubs</a><br><br>

            <?php echo form_close(); ?>

          </div>
          <div class="col-md-3"></div>
        </div>

      </div><!-- /#wrapper -->

    <footer>
        <p class="text-right">&copy StudentMate 2017</p>
    </footer>
    <!-- JavaScript -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
