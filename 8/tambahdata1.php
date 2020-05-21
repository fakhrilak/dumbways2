<?php 
include("header.php"); 
include("koneksi.php"); 
?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<div class="container">
		<div class="content">
			<h2>Tambah content</h2>
			<hr/>
			
			<?php
			if(isset($_POST['add'])){ 
				$name		= $_POST['name'];
				$video_link = $_POST['video_link'];
				$type	 	= $_POST['type'];
				$id_course	= $_POST['id_course'];

				
				$query = mysqli_query($link,"INSERT INTO content (name, video_link, type, id_course) VALUES ('$name','$video_link','$type','$id_course')") or die(mysqli_error($link));
				if($query) {
				    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
				} else {
				    echo "<script>alert('Data gagal ditambahkan');</script>";
				}
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama content</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" placeholder="Nama content" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Video link</label>
					<div class="col-sm-4">
						<input type="text" name="video_link" class="form-control" placeholder="Video link" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Type</label>
					<div class="col-sm-3">
						<input type="text" name="type" class="form-control" placeholder="Type" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ID Course</label>
					<div class="col-sm-4">
						<input type="text" name="id_course" class="form-control" placeholder="ID Course" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data tb_content">
						<a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form> <!-- /form -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
</body>
</html>