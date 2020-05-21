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
			<h2>Tambah course</h2>
			<hr/>
			
			<?php
			if(isset($_POST['add'])){ 
				$name	= $_POST['name'];
				$duration   		= $_POST['duration'];
				$id_author	 = $_POST['id_author'];
				$description	 = $_POST['description'];
				$thumbnail     = $_POST['thumbnail'];

				
				$query = mysqli_query($link,"INSERT INTO course (name, duration, id_author, description, thumbnail) VALUES ('$name','$duration','$id_author','$description','$thumbnail')") or die(mysqli_error($link));
				if($query) {
				    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
				} else {
				    echo "<script>alert('Data gagal ditambahkan');</script>";
				}
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama course</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" placeholder="Nama course" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Durasi</label>
					<div class="col-sm-3">
						<input type="text" name="no_telepon" class="form-control" placeholder="Durasi" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ID author</label>
					<div class="col-sm-4">
						<input type="text" name="id_author" class="form-control" placeholder="ID author" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Description course</label>
					<div class="col-sm-4">
						<textarea name="description" class="form-control" placeholder="Desctiption course" required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Thumbnail course</label>
					<div class="col-sm-4">
						<textarea name="thumbnail" class="form-control" placeholder="Thumbnail course"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data tb_course">
						<a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form> <!-- /form -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
</body>
</html>