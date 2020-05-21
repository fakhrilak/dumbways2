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
			<h2>Tambah author</h2>
			<hr/>
			
			<?php
			if(isset($_POST['add'])){ 
				$name	= $_POST['name'];

				
				$query = mysqli_query($link,"INSERT INTO author (name) VALUES ('$name')") or die(mysqli_error($link));
				if($query) {
				    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
				} else {
				    echo "<script>alert('Data gagal ditambahkan');</script>";
				}
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama author</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" placeholder="Nama author" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data tb_content">
						<a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div> 
	</div> 
</body>
</html>