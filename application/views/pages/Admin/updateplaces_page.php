<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="row">
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

                <?php echo form_open('Markers/add_markers'); ?>

                  <div class="form-group">
                  <label>Name</label>
                      <input type="text" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                  <label>Address</label>
                      <input type="text" class="form-control" name="address">
                  </div>
                  <div class="form-group">
                  <label>Latitude</label>
                      <input type="text" class="form-control" name="lat">
                  </div>
                  <div class="form-group">
                  <label>Longitude</label>
                      <input type="text" class="form-control" name="lang">
                  </div>
                  <div class="form-group">
                  <label>type</label>
                      <input type="text" class="form-control" name="type">
                  </div>
                  <div class="form-group">
                  <label>Description</label>
                      <input type="text" class="form-control" row="5" name="description">
                  </div>

                  <button class="btn btn-primary" type="submit" name="addplace">Add Post</button>
                  <a href="<?php echo site_url('Admin') ?>" class="btn btn-link">Back to Home</a><br><br>

              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
