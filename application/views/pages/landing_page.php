<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           <a class="navbar-brand" href="#" style="font-size :30px;">STUDENTMATE</a>
      </nav>
      <div id="page-wrapper">

        <div class="row">

            <!-- <div class="wrapinfo"> -->
                <div class="col-md-8 col-lg-8">
                    <div class="jumbotron">
                        <div class="container">
                            <p>StudentMate is the ultimate platform built to help the university students of
                              UOC when they started their university lives.</p>
                              <br>
                              <img src="<?php echo base_url() ?>assets/images/logoNew.png" alt="logo" class="logo" >
                              <br><br>
                              <a class="btn btn-primary" href="<?php echo site_url("User/Signup"); ?>" role="button">Sign Up</a>
                        </div>
                    </div>
                </div>


            <div class="wrapbox">
                <img src="<?php echo base_url(); ?>assets/images/user1.png">

                    <?php echo form_open("Users/loginUser") ?>
                        <!-- <label>Username</label> -->
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <br>
                        <!-- <label>Password</label> -->
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <br>
                        <div class="form-group input-group">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                            <a href="<?php echo site_url("Home"); ?>" role="button" class="btn btn-default" style="margin-left: 20px;">RESET</a>
                        </div>


                    <?php echo form_close() ?>
                    <?php if($this->session->flashdata('login_failed')): ?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                              <?php echo $this->session->flashdata('login_failed');?>
                      </div>
                    <?php endif; ?>
            </div>


            <div class="container">
            <h1 style="text-align: center; padding-top: 30px; font-size: 35px;" id="tryoption">You can try the below options without sign up</h1>
            </div>




                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>assets/images/ibus.png">
                    <div class="caption">
                      <h3>BUS ROUTES</h3>
                          <p>Find the bus routes for places where you want to go.</p>

                      <p><a href="#" class="btn btn-default" role="button">GO</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>assets/images/imap.png">
                    <div class="caption">
                      <h3>PLACES</h3>
                      <p>Find the places where you want to go with directions.</p>

                      <p><a href="#" class="btn btn-default" role="button">GO</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>assets/images/itrain.png">
                    <div class="caption">
                      <h3>TRAIN ROUTES</h3>
                      <p>Find the train routes for places where you want to go.</p>
                      <p><a href="#" class="btn btn-default" role="button">GO</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


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
