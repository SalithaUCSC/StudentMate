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
        <script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
        <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> -->
        <style type="text/css">
          textarea {
             resize: none;
          }
        </style>
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
          <a class="navbar-brand" href="<?php echo site_url('FacAdmin/facHome') ?>" style="font-size: 25px;">STUDENTMATE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

          <ul class="nav navbar-nav side-nav">
                <img src="<?php echo base_url() ?>assets/images/logoNew.png" alt="logo" class="logo">
            <li><a href="<?php echo site_url("FacAdmin/facHome") ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url("FacAdmin/addClubs") ?>"><i class="fa fa-university"></i>Add Club Post</a></li>
            <li><a href="<?php echo site_url("FacAdmin/addNews") ?>"><i class="fa fa-file-text-o"></i> Add Faculty News</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-table"></i> Manage Timetable</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user" style="color: black;">
            <li><a href="<?php echo site_url('FacAdmin/FadminProfile') ?>"><i class="fa fa-user-circle-o"></i>
              <?php echo $_SESSION['faculty']; ?> Admin</a>
            </li>
              <li><a href="<?php echo site_url('FacAdmin'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">

          <div class="col-lg-12">
            <h2>Register a Club</h2><br>

            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-cc-diners-club"></i>Add New Club</li>
            </ol>
          </div>
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <br>
            <div class='panel panel-default'>
              <div class='panel-body'>
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

                  <?php echo form_open('FacAdmin/addNewClub'); ?>

                    <div class="form-group">
                    <label>Club Name</label>
                        <input type="text" class="form-control" name="c_name">
                    </div>
                    <div class="form-group">
                    <label>Club DB Value</label>
                        <input type="text" class="form-control" name="c_value">
                    </div>
                    <div class="form-group">
                    <label>Faculty</label>
                        <input type="text" class="form-control" name="c_faculty" value="<?php echo $_SESSION['faculty'];?>" readonly="readonly">
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Add Club</button>
                    <a href="<?php echo site_url('FacAdmin/facHome') ?>" class="btn btn-link">Back to Home</a><br><br>

                  <?php echo form_close(); ?>
                </div>
                <div class="col-lg-3"></div>
              </div>
            </div>
        </div>
      </div>
    </div><!-- /#wrapper -->

    <footer>
        <p class="text-right">&copy StudentMate 2017</p>
    </footer>
    <!-- JavaScript -->

    <script>
        CKEDITOR.replace( 'content' );
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
