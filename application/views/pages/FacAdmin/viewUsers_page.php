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
          table {
            font-size: 14px;
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
            <li class="active"><a href="<?php echo site_url("FacAdmin/facHome") ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url("FacAdmin/addClubs") ?>"><i class="fa fa-university"></i>Add Club Post</a></li>
            <li><a href="<?php echo site_url("FacAdmin/addNews") ?>"><i class="fa fa-file-text-o"></i> Add Faculty News</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-table"></i> Manage Timetable</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user" style="color: black;">
              <li><a href="<?php echo site_url('FacAdmin/FadminProfile') ?>"><i class="fa fa-user"></i>Admin Profile</a></li>
              <li><a href="<?php echo site_url('FacAdmin'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h2>Faculty Admin Dashboard</h2><br>

            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-user"></i>View User Details</li>
            </ol>

            <div class="col-lg-12">
                <div class="row">
                  <div class="well">
                      <h4><i class="fa fa-user"></i>Registered Users
                        <div style="float: right;">
                          <?php echo count($recs); ?> users
                        </div>
                      </h4>
                  </div>
                </div>
            </div>


          </div>
        </div><!-- /.row -->


        <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive table-bordered">
                <table class="table">

                <tr>
                    <th>Index</th>
                    <th>Userame</th>
                    <th>Full name</th>
                    <th>Remove</th>
                </tr>

                <?php if (count($records)): ?>

                    <?php foreach ($records as $row): ?>

                    <tr>
                        <td><?php echo $row->indexno; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->fname; ?></td>
                        <!-- Button to trigger modal -->
                        <td><a href="<?php echo base_url('FacAdmin/deleteUser/'.$row->user_id) ?>">
                        <button type='submit' class='btn btn-danger btn-sm' onclick="return checkDelete()">Delete</button></a></td>

                    <?php endforeach; ?>

                <?php else: ?>
                    <center><p style="margin: 20px;">No users registered</p></center>
                <?php endif ?>

            </table>
            </div>
            <br>
            <?php echo $link ?>
          </div>
        </div>
        <!-- <div class="col-lg-2"></div> -->
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
