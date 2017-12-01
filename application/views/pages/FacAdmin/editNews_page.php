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
        <script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
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
          table {
            font-size: 14px;
          }
          /*body {
            background-color: #E6E6E6;
          }*/
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
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>

            <li class="dropdown user-dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'];?> </a>
            <ul class="dropdown-menu">
                <!-- <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li> -->
                <li><a href="<?php echo site_url('FacAdmin/FadminProfile') ?>"><i class="fa fa-user"></i>Admin Profile</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url('FacAdmin'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h2>Faculty Admin Dashboard</h2><br>

            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-file-text-o"></i>Edit News</li>
            </ol>

            <div class="row">
                <!-- <div class="col-lg-12"> -->
                  <div class="col-lg-3"></div>
                  <div class="col-lg-6">

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

                    <?php echo form_open('FacAdmin/edit_News/'.$row->newsid); ?>

                      <div class="form-group">
                      <label>Title</label>
                          <input type="text" class="form-control" name="tname" value="<?php echo $row->tname ?>">
                      </div>
                      <div class="form-group">
                          <label>Faculty</label>
                          <input type="text" class="form-control" name="faculty" value="<?php echo $row->faculty ?>" readonly="readonly">
                      </div>
                      <div class="form-group">
                      <label>Date</label>
                          <input type="date" class="form-control" name="date" value="<?php echo $row->date ?>">
                      </div>
                      <div class="form-group">
                          <label>Time</label>
                          <input type="time" class="form-control" name="time" value="<?php echo $row->time ?>">
                      </div>

                      <label>Content</label>
                      <textarea rows="5" name="content"><?php echo $row->content ?></textarea>

                      <br><br>
                      <button class="btn btn-primary" type="submit" name="update">Update</button>
                      <a href="<?php echo site_url('FacAdmin/viewAllNews') ?>" class="btn btn-link">Back to News</a><br><br>

                  <?php echo form_close(); ?>
                  </div>
                  <div class="col-lg-3"></div>

                </div>
                <!-- </div> -->
            </div>

          </div>
        </div><!-- /.row -->

        <!-- <div class="col-lg-2"></div> -->
      </div><!-- /#wrapper -->
</div>
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
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
