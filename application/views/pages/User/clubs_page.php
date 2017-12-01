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
            <li class="active"><a href="#"><i class="fa fa-university"></i> Clubs</a></li>
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
            <h2>NEW RECRUITEMENTS FOR CLUBS AND SOCIETIES</h2><br>

            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-cc-diners-club" aria-hidden="true"></i> Select a club and register</li>
            </ol>
          </div>
        </div>

        <div class="row">
        <?php if (count($records)): ?>

        <?php foreach ($records as $row): ?>

      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title"> <?php echo $row->clubname; ?></i></h1>
              </div>
              <div class="panel-body">
                <p>Registrations are open until
                <?php echo date('F d, Y', strtotime($row->clubdate)); ?> @ <?php echo date('h:m A',strtotime($row->clubtime)); ?>
                </p>
                <br>
                <a href="<?php echo site_url('Users/joinClubs/'.$row->clubid); ?>" class="btn btn-primary" role="button">Enter</a>
              </div>
          </div>
          <br>
      </div>
        <?php endforeach; ?>

        <?php else: ?>
        <center><p style="margin: 20px;">Still no registrations for clubs</p></center>
        <?php endif ?>
      </div>
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
