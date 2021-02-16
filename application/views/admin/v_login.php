<html>
  <head>
    <title>Form Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        Form Login
      </div>
      <div class="card-body">
        <?php 
        if($this->session->flashdata('error') !='')
        {
          echo '<div class="alert alert-danger" role="alert">';
          echo $this->session->flashdata('error');
          echo '</div>';
        }
        ?>

        <?php 
        if($this->session->flashdata('success_register') !='')
        {
          echo '<div class="alert alert-info" role="alert">';
          echo $this->session->flashdata('success_register');
          echo '</div>';
        }
        ?>
        <form method="post" action="<?php echo base_url(); ?>login/proses">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <?php echo form_submit('register', ' Register ', 'class="btn btn-success"'); ?>
        </form>
        <?php echo anchor(site_url() . '/lupa_password', 'Lupa Password');
        ?>
        
      </div>
    </div>
  </div>    
  </body>
</html>