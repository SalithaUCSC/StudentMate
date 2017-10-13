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
    <style type="text/css">
        table td {
            text-align: left;
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
          <a class="navbar-brand" href="<?php echo site_url('Users/userHome') ?>" style="font-size: 25px;">STUDENTMATE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
              <img src="<?php echo base_url() ?>assets/images/logoNew.png" alt="logo" class="logo">
            <li class="active"><a href="<?php echo site_url('User/userHome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url("Users/userAccommodation") ?>"><i class="fa fa-building"></i> Accomodation</a></li>
            <li><a href="<?php echo site_url("Users/userScholarships") ?>"><i class="fa fa-graduation-cap"></i> Scholarships</a></li>
            <li><a href="<?php echo site_url("Users/userClubs") ?>"><i class="fa fa-university"></i> Clubs</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-table"></i> Timetable</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user" style="color: black;">
            <li><a href="<?php echo base_url('Users/signout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">

              <div class="row">
                <div class="col-lg-12">
                  <h2><?php echo $_SESSION['fname']; ?></h2>
                  <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-user"></i> User Profile</li>
                  </ol>
                  <div class="row" style="text-align: center;">
                      <div class="col-md-3"></div>
                      <div class="col-md-6" style="margin: auto; display: block;">
                      <div class="thumbnail">
                        <img src="http://via.placeholder.com/150x150" alt="" style="padding-top: 20px;">
                        <div class="caption">
                          <h3><?php echo $_SESSION['username']; ?></h3><br>

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

                            <?php echo form_open('Users/editUser/'.$row->user_id); ?>

                                <div class="form-group">
                                <label>Full Name</label>
                                    <input type="text" class="form-control" name="fname" value="<?php echo $row->fname ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $row->email ?>">
                                </div>

                                <div class="form-group">
                                    <label>Index Number</label>
                                    <input type="text" class="form-control" name="indexno" value="<?php echo $row->indexno ?>">
                                </div>

                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" name="contact" value="<?php echo $row->contact ?>">
                                </div>

                                <button class="btn btn-primary" type="submit" name="updatebtn">Update</button>
                                <a href="<?php echo base_url('Users/userProfile') ?>" class="btn btn-link">Back to Profile</a>
                          <?php echo form_close(); ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3"></div>
                  </div>
                </div>
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
