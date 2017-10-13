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
          <a class="navbar-brand" href="#" style="font-size: 25px;">STUDENTMATE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

          <ul class="nav navbar-nav navbar-right navbar-user" style="color: black;">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Faculty Admins</a>
              <li><a href="<?php echo base_url(); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">

              <div class="row">
                <div class="col-md-3"></div>

                <div class="col-lg-6">
                  <h2>Faculty Admin Navigation</h2><br>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-university"></i> Select your faculty and login</li>
                  </ol>
                  <!-- <div class="row" style="text-align: center;">



                    </div> -->

                    <?php if($this->session->flashdata('login_failed')): ?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                              <?php echo $this->session->flashdata('login_failed');?>
                      </div>
                    <?php endif; ?>
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>','</div>'); ?>

                    <?php echo form_open('FacAdmin/getFacLogin'); ?>

                      <div class="form-group">
                        <label>Faculty</label><br>
                        <select name="faculty" class="form-input">
                          <option selected="selected" disabled="disabled">Select your faculty</option>
                          <?php if (count($facs)): ?>

                            <?php foreach ($facs as $row): ?>

                              <option value="<?php echo $row->fac_value ?>"><?php echo $row->fac_name ?></option>

                            <?php endforeach; ?>
                          <?php else: ?>
                              <option value="none"><?php echo "no faculties" ?></option>
                          <?php endif ?>
                        </select>
                      </div>
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" name="username">
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password">
                      </div>

                      <button class="btn btn-primary" type="submit">Login</button>

                  <?php echo form_close(); ?>

                </div>

                <div class="col-md-3"></div>
            </div>
          </div>
        </div>
  <!-- /#wrapper -->

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
