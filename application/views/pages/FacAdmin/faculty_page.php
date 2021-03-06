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
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <li class="active"><i class="fa fa-dashboard"></i>Home</li>
            </ol>

            <div class="col-lg-3 col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                              <i class="fa fa-user fa-4x"></i>
                          </div>
                          <div class="col-xs-9 text-right" style="color: black;">
                              <div class="huge"><?php echo count($usr); ?></div>
                              <div>Users</div>
                          </div>
                      </div>
                  </div>
                  <a href="#">
                      <div class="panel-footer">
                          <a href="<?php echo site_url('FacAdmin/viewAllUsers'); ?>"><span class="pull-left">View Users</span></a>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
                  </a>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                              <i class="fa fa-university fa-4x"></i>
                          </div>
                          <div class="col-xs-9 text-right" style="color: black;">
                              <div class="huge"><?php echo count($clubs); ?></div>
                              <div>Club Posts</div>
                          </div>
                      </div>
                  </div>
                  <a href="#">
                      <div class="panel-footer">
                          <a href="<?php echo site_url('FacAdmin/viewAllClubs'); ?>"><span class="pull-left">View All Posts</span></a>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
                  </a>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                              <i class="fa fa-file fa-4x"></i>
                          </div>
                          <div class="col-xs-9 text-right" style="color: black;">
                              <div class="huge"><?php echo count($nws); ?></div>
                              <div>News Posts</div>
                          </div>
                      </div>
                  </div>
                  <a href="#">
                      <div class="panel-footer">
                          <a href="<?php echo site_url('FacAdmin/viewAllNews'); ?>"><span class="pull-left">View News</span></a>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
                  </a>
              </div>

            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                              <i class="fa fa-tasks fa-4x"></i>
                          </div>
                          <div class="col-xs-9 text-right" style="color: black;">
                              <!-- <div class="huge">12</div> -->
                              <div>New Tasks!</div>
                          </div>
                      </div>
                  </div>
                  <a href="#">
                      <div class="panel-footer">
                          <a href="#"><span class="pull-left">View Details</span></a>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
                  </a>
              </div>

            </div>
          </div>
        </div><!-- /.row -->

        <hr>

        <div class="row">

            <div class="col-lg-12">
              <!-- <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div> -->
                        <!-- /.panel-heading -->
                        <!-- <div class="panel-body"> -->
                            <!-- <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div> -->
                            <!-- /.list-group -->
                            <!-- <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div> -->
                        <!-- /.panel-body -->
                    <!-- </div> -->
              <!-- </div> -->

                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="panel panel-default">
                      <a href="<?php echo site_url('FacAdmin/viewClubUsers') ?>" class="btn btn-default btn-block">View Club registrations</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="panel panel-default">
                      <a href="<?php echo site_url('FacAdmin/addNewClub') ?>" class="btn btn-default btn-block">Add Faculty Club</a>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-6">
                  <br>
                </div> -->



              <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-user-o fa-fw"></i> Recently Registered Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                              <?php if (count($usrlimit)): ?>

                                  <?php foreach ($usrlimit as $row): ?>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-user fa-fw"></i> <?php echo $row->fname ?>
                                    <span class="pull-right text-muted small"><em><?php echo $row->indexno ?></em>
                                    </span>
                                </a>
                              <?php endforeach; ?>
                            <?php else: ?>
                                <center><p style="margin: 20px;">No registered users</p></center>
                            <?php endif ?>
                            </div>
                            <!-- /.list-group -->
                            <a href="<?php echo site_url('FacAdmin/viewAllUsers') ?>" class="btn btn-default btn-block">View All Users</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
              </div>
              <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-university fa-fw"></i> Recent Club Posts
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                              <?php if (count($clubslim)): ?>

                                <?php foreach ($clubslim as $row): ?>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-file-text-o fa-fw"></i> <?php echo $row->clubname ?>
                                    <span class="pull-right text-muted small"><em>Date: <?php echo $row->clubdate ?> Time: <?php echo $row->clubtime ?></em>
                                    </span>
                                </a>
                              <?php endforeach; ?>
                            <?php else: ?>
                                <center><p style="margin: 20px;">No registrations for clubs</p></center>
                            <?php endif ?>
                            </div>
                            <!-- /.list-group -->
                            <a href="<?php echo site_url('FacAdmin/viewAllClubs') ?>" class="btn btn-default btn-block">View All Posts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
              </div>
              <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-university fa-fw"></i> Recent News Posts
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                              <?php if (count($nwslm)): ?>

                                <?php foreach ($nwslm as $row): ?>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-file-text-o fa-fw"></i> <?php echo $row->tname ?>
                                    <span class="pull-right text-muted small"><em>Date: <?php echo $row->date ?> Time: <?php echo $row->time ?></em>
                                    </span>
                                </a>
                              <?php endforeach; ?>
                            <?php else: ?>
                                <p style="margin-bottom: 50px;">No Posts</p>
                            <?php endif ?>
                            </div>
                            <!-- /.list-group -->
                            <a href="<?php echo site_url('FacAdmin/viewAllNews') ?>" class="btn btn-default btn-block">View All Posts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
              </div>

            </div>


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
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
