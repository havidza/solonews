<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

		<!-- Custom styles for this template -->
		<link href="<?php echo base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('assets/js/jquery/jquery.min.js') ?>"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

	</head>
	<body>
		
	<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Admin Panel ZeroNews </div>
  <div class="list-group list-group-flush">
  <a href="<?php echo base_url()?>admin/a_panel" class="list-group-item list-group-item-action bg-light">Dashboard</a>
	<a href="<?php echo base_url()?>berita" class="list-group-item list-group-item-action bg-light">Berita</a>
	<a href="<?php echo base_url()?>beritajenis" class="list-group-item list-group-item-action bg-light">Berita Jenis</a>
	<a href="<?php echo base_url()?>penulis" class="list-group-item list-group-item-action bg-light">Penulis</a>
	<a href="<?php echo base_url(); ?>login/logout" class="list-group-item list-group-item-action bg-light">Log Out</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
	<button class="btn btn-primary" id="menu-toggle">Menu</button>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
  </nav>

  <div class="container-fluid">
	<div class="row">
	  <div class="col-md">
		<br><br><br><br><br><br><br><br>
		<div class="card text-white text-center bg-dark mb-3" style="max-width: 100%;">
		   <div class="card-body">
			<h3 class="card-title">SELAMAT DATANG <?php echo $this->session->userdata('nama'); ?> DI ADMIN PANEL ZERONEWS</h3>
			<p class="card-text"></p>
		  </div>
		 
		</div>
		</div>
	  </div>
	</div>
	
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>


	<!-- <div class="container">
		<div class="card">
			<div class="card-header">
				Home Page
			</div>
			<div class="card-body">
				<center><h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1></center>
				<hr/>
				<a href="<?php echo base_url(); ?>login/logout" class="btn btn-primary btn-lg btn-block">Logout</a>
			</div>
		</div>
	</div>		 -->
	</body>
</html>