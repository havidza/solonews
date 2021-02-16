<?php
defined('BASEPATH') or exit ('no direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Berita</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
 
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery/jquery.min.js') ?>">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    
				 <!-- Navbar -->
<nav class="navbar navbar-default" style="background-color: #fcfcfc;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
	  <center>
        <img alt="Brand" src="<?php echo base_url('assets/images/logo.png') ?>" width="20%"></center>
      </a>
    </div>
  </div>
</nav>
<hr style="border: 1px solid #e8eaeb;">
	
	<div class="container">
		
		<!-- NavBar -->

		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0099CC; ">
		  <a class="navbar-brand" href="#">SoloNews</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url(). 'home'?>">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url(). 'olahraga'?>">Olahraga</a>
		      </li>
		      <li class="nav-item ">
		        <a class="nav-link" href="<?php echo base_url(). 'otomotif'?>">Otomotif</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url(). 'politik'?>">Politik</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo base_url(). 'travelling'?>">Travelling</a>
		      </li>
				      
		    </ul>
		  </div>
		</nav>

		<!-- End Navbar -->


		<br>
		<div class="row">
			<div class="col-md-8">



				<!-- Breadcrumb  -->

				<nav aria-label="breadcrumb" style="background-color: #ffffff ; ">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"><a href="#">Beranda</a></li>
						<li class="breadcrumb-item"><?php echo date('l, d-m-y'); ?></li>
					</ol>
				</nav>

				<!-- End Breadcrumb -->
				
				<!-- Content Utama -->
            
				<div class="berita">
    
               
						<?php 
							foreach ($berita as $b ) {
						?>
						<h2 style="color: #0099CC; "><?php echo $b->judul ?></h2>
						<h6 style="color: #bdbdbd ;"><?php echo $b->nama ?>- <?php echo $b->waktu_terbit ?></h6>
						

						<img src="<?php echo base_url('assets/images/'.$b->gambar) ?>" width="100%"><br><br>

						<h6><b style="color:#0099CC; ">Read</b> | 467 words | July 2020</h6><br>
						<p align="justify"><?php echo $b->isi ?></p>
						<hr>
							<br>	
						
					
					<?php } ?>
					
				</div>
			</div>
           
                        
			<!-- End Content Utama -->
			
			<!-- Sidebar -->

			<div class="col-md-4">
            <div class="card">
			<div class="card-body" style="text-align: center; background-color: #0099CC; color: #ffffff;">
				<h4>HOT NEWS</h4>
			</div>	
		</div>
				<div class="berita2">
					<div class="isiBerita">
                        <br>
						
						<img src="<?php echo base_url('assets/images/logo.png') ?>" width="100%"><br><br>

						<?php 
							foreach ($limit as $l ) {
								# code...

						?>
						<h4 style="color: #0099CC; "><?php echo $l->judul ?></h4><br>
						<img src="<?php echo base_url('assets/images/'.$l->gambar) ?>" width="100%"><br><br>

						<h6><b style="color:#0099CC; ">Read</b> | 467 words | June 2019</h6><br>
						<p align="justify"><?php echo $l->headline ?></p>
						<a href="<?php echo base_url(). ''.$l->link ?>"><button type="button" class="btn btn-outline-info">Read More</button></a> <br><br>

						<br>


						
		<?php } ?>
						
		
		</div>
				
		</div>
		

	</div>
	<!-- End Sidebar -->
	
	</div>
	<br><br><br>

			<!-- Mulai Footer -->
		<footer class="page-footer font-small stylish" style="background-color: #0099CC; color: #ffffff; ">

		  <!-- Footer Links -->
		  <div class="container text-center text-md-left">

		    <!-- Grid row -->
		    <div class="row">

		      <!-- Grid column -->
		      <div class="col-md-4 mx-auto">

		        <!-- Content -->
		        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>
		        <p>ZeroNews Plaza, Lantai 20 Kav. 20-22, Jl. Ir Soekarno, Nusukan, Surakarta Telp: +62 21 4595 2900 Fax: +62 21 2473375 ZeroNews Media </p>

		      </div>
		      <!-- Grid column -->

		      <hr class="clearfix w-100 d-md-none">

		      <!-- Grid column -->
		      <div class="col-md-2 mx-auto">

		        <!-- Links -->
		        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Berita</h5>

		        <ul class="list-unstyled">
		          <li>
		            Olahraga
		          </li>
		          <li>
		           Otomotif
		          </li>
		          <li>
		            Travelling
		          </li>
		          <li>
		            Politik
		          </li>
		        </ul>

		      </div>
		      <!-- Grid column -->

		      <hr class="clearfix w-100 d-md-none">

		      <!-- Grid column -->
		     

		      <hr class="clearfix w-100 d-md-none">

		      <!-- Grid column -->
		      <div class="col-md-2 mx-auto">

		        <!-- Links -->
		        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Email</h5>

		        <ul class="list-unstyled">
		          <li>
		           zeronews@gmail.com
		          </li>
		         
		        </ul>

		      </div>
		      <!-- Grid column -->

		    </div>
		    <!-- Grid row -->

		  </div>
		  <!-- Footer Links -->


		  <hr>

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">© 2019 Copyright: SoloNews
		   
		  </div>
		  <!-- Copyright -->

		</footer>
		<!-- End Footer -->


</div>


</body>
</html>