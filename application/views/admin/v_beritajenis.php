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
		 <h1 class="mt-4">Berita Jenis</h1>
              <br>
              <a href="<?php echo base_url('beritajenis/tambah')?>">
                <button class="btn btn-success">Tambah Data</button>
             </a>
              <br><br>
              <table class="table">
              <thead class="thead-dark">
                <tr>
                <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Actions</th>
                  
                </tr>
              </thead>
              <tbody>
                  
                </tr>
              </thead>
              <tbody>
                
                <!-- Mengambil data dari tabel penulis -->
                <?php 
                    $no = 1;
                    foreach($beritajenis as $bj){ 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $bj->jenis ?></td>
                        <td>

                            <a href="<?php echo base_url('beritajenis/edit/'.$bj->id)?>">
                          <button class="btn btn-primary">Edit</button>
                          </a>

                            <a href="<?php echo base_url('beritajenis/hapus/'.$bj->id)?>">
                            <button class="btn btn-danger">Hapus</button>
                          </a>

                    
                        </td>
                    </tr>
                    <?php } ?>
	</table>
              <!-- End  -->
              
              </tbody>
            </table>
		 
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
</script>
	</body>
</html>