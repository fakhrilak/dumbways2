<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
<html>
<head>
	<title>Dumbways</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 services">
					<img src="images/php.png" class="service-img">
					<h4>Course</h4>
					<a href="tampildata.php" class="btn btn-primary">Lihat course</a>
				</div>
				<div class="col-md-4 services">
					<img src="images/php.png" class="service-img">
					<h4>Author</h4>
					<a href="tampildata2.php" class="btn btn-primary">Lihat author</a>
				</div>
				<div class="col-md-4 services">
					<img src="images/php.png" class="service-img">
					<h4>Content</h4>
					<a href="tampildata1.php" class="btn btn-primary">Lihat content</a>
					


				</div>
			</div>
		</div>

	</section>
</body>
</html>