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
            <li><a href="<?php echo site_url('Users/userHome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url("Users/userAccommodation") ?>"><i class="fa fa-building"></i> Accomodation</a></li>
            <li><a href="<?php echo site_url("Users/userScholarships") ?>"><i class="fa fa-graduation-cap"></i> Scholarships</a></li>
            <li><a href="<?php echo site_url('Users/userClubs') ?>"><i class="fa fa-university"></i> Clubs</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-table"></i> Timetable</a></li>
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
                          <?php echo form_open('Users/getPassword/'.$row->user_id) ?>
                            <div class="form-group">
                            <label>Current Password</label>
                                <input type="password" class="form-control" name="passwordold">
                            </div>
                            <div class="form-group">
                            <label>New Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                            <label>Retype new Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword" onkeyup='check();'>
                            </div>

                            <span id='message'></span><br><br>
                            <button class="btn btn-primary" type="submit" name="updatebtn">Update Password</button>

                            <?php echo form_close() ?>
                            <br>
                            <a href="<?php echo base_url('Users/userProfile') ?>" class="btn btn-link">Back to Profile</a>

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
