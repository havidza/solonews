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
		<script src="<?php echo base_url()?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
		<script>
      tinymce.init({
        selector: 'textarea'
      });
      </script>
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
		<h1 class="mt-4">Tambah Data Berita</h1>
              <br>

              <!-- Untuk membuat border kotak pada content  -->
            	<div class="card">	

            	<!-- Untuk membuat border kotak pada content  -->
				<div class="card-body">

				 <!-- Mulai Form -->
					<form action="<?php echo base_url(). 'berita/tambah_aksi'; ?>" method="post">
						<div class="form-group row">
							<label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="judul" placeholder="Judul" required="required">
							</div>
							<label for="inputJudul" class="col-sm-2 col-form-label">Gambar</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="gambar" placeholder="Gambarr" required="required">
							</div>
							<label for="inputJudul" class="col-sm-2 col-form-label">Waktu Terbit</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" name="waktu_terbit" placeholder="tanggal" required="required">
							</div>
							<label for="inputJudul" class="col-sm-2 col-form-label">Isi</label>
							<div class="col-sm-10">
							<textarea name="isi" class="form-control"></textarea>
							</div>
							<label for="inputJudul" class="col-sm-2 col-form-label">Headline</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="headline" placeholder="Headline" required="required">
							</div>
							<label for="inputJudul" class="col-sm-2 col-form-label">Link</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="link" placeholder="Link" required="required">
							</div>
							<label for="inputJudul" class="col-sm-2 col-form-label">Penulis</label>
							<div class="col-sm-10">
							<select name="penulis" id="inputJenis" class="form-control" required="required">
								<?php 
								foreach($berita as $b){ 
								
									echo '<option value="' .$b->id . '">' .$b->nama. '</option>';
								}

								?>
								</select>
							</div><label for="inputJudul" class="col-sm-2 col-form-label">HJenis Berita</label>
							<div class="col-sm-10">
							<select name="jenis" id="inputJenis" class="form-control" required="required">
								<?php 
								foreach($berita as $b){ 
								
									echo '<option value="' .$b->id . '">' .$b->jenis. '</option>';
								}

								?>
								</select>
							</div>
						</div>


						<center>
						<button class="btn btn-primary">Submit</button>
					</center>
					</form>
					<!-- End Form  -->

				</div>
			</div>
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