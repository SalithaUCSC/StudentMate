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
        <script language="JavaScript" type="text/javascript">
        function checkDelete(){
            return confirm('Are you sure?');
        }
        </script>
        <style type="text/css">
          .panel-footer a {
            color: black;
          }
          .panel-footer a:hover {
            color: grey;
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
            <h2>Faculty Admin Dashboard</h2><br>

            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-cc-diners-club"></i> View Club registrations</li>
            </ol>


            <?php if (count($clbs)): ?>

            <?php foreach ($clbs as $row): ?>

            <div class="col-lg-4 col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                              <i class="fa fa-university fa-3x"></i>
                          </div>
                          <div class="col-xs-9 text-right" style="color: black;">
                              <div class="huge"><h4><?php echo $row->c_name ?></h4></div>
                              <!-- <div>News Posts</div> -->
                              <a href="<?php echo base_url('FacAdmin/edit_clubReg/'.$row->c_id) ?>" class="btn btn-primary btn-xs">Update</a>
                              <a href="<?php echo base_url('FacAdmin/delete_clubReg/'.$row->c_id) ?>" class="btn btn-danger btn-xs" onclick="return checkDelete()">
                                Delete</a>
                          </div>
                      </div>
                  </div>

                      <!-- <div class="panel-footer">
                          <span class="pull-left"></span></a>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div> -->

              </div>
            </div>
            <?php endforeach; ?>

            <?php else: ?>

            <center><p style="margin: 20px;">No clubs regitered</p></center>
            <?php endif ?>


          </div>
        </div>
      </div><!-- /.row -->
  </div><!-- /#wrapper -->

    <footer>
        <p class="text-right">&copy StudentMate 2017</p>
    </footer>
    <!-- JavaScript -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
