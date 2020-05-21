<?php 
include("header.php"); 
include("koneksi.php"); 
?>
	<div class="container">
		<div class="content">
			<h2>Data course &raquo; Edit Data</h2>
			<hr/>
			
			<?php
			$id = $_GET['id']; 
			$sql = mysqli_query($link, "SELECT * FROM course WHERE id='$id'"); 
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){ 
				
				$name		     = $_POST['name'];
				$duration		 = $_POST['duration'];
				$id_author   = $_POST['id_author'];
				$description	 = $_POST['description'];
				$thumbnail	 = $_POST['thumbnail'];

				$update = mysqli_query($link, "UPDATE course SET name='$name', duration='$duration', id_author='$id_author', description='$description', thumbnail='$thumbnail'") or die(mysqli_error()); 
				if($update){
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gembel.</div>';
					header("Location: edit.php?id=".$id."&pesan=sukses"); 
				}else{ 
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>'; 
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){ 
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan. <a href="data.php"><- Kembali</a></div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">name</label>
					<div class="col-sm-4">
						<input type="text" name="name" value="<?php echo $row ['name']; ?>" class="form-control" placeholder="name" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">duration</label>
					<div class="col-sm-2">
						<input type="text" name="duration" value="<?php echo $row ['duration']; ?>" class="form-control" placeholder="duration" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ID author</label>
					<div class="col-sm-2">
						<input type="text" name="id_author" value="<?php echo $row ['id_author']; ?>" class="form-control" placeholder="id_author" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Description</label>
					<div class="col-sm-4">
						<input type="text" name="description" value="<?php echo $row ['description']; ?>" class="form-control" placeholder="Description" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Thumbnail course</label>
					<div class="col-sm-4">
						<input type="text" name="thumbnail" value="<?php echo $row ['thumbnail']; ?>" class="form-control" placeholder="Thumbnail course" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data course">
						<a href="tampildata.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div> 
	</div> 
