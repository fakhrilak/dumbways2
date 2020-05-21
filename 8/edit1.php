<?php 
include("header.php"); 
include("koneksi.php"); 
?>
	<div class="container">
		<div class="content">
			<h2>Data content &raquo; Edit Data</h2>
			<hr />
			
			<?php
			$id = $_GET['id']; 
			$sql = mysqli_query($link, "SELECT * FROM content WHERE id='$id'"); 
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){ 
				
				$name		     = $_POST['name'];
				$video_link		 = $_POST['video_link'];
				$type   = $_POST['type'];
				$id_course	 = $_POST['id_course'];

				$update = mysqli_query($link, "UPDATE content SET name='$name', video_link='$video_link', type='$type', id_course='$id_course' ") or die(mysqli_error()); 
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
					<label class="col-sm-3 control-label">Name</label>
					<div class="col-sm-4">
						<input type="text" name="name" value="<?php echo $row ['name']; ?>" class="form-control" placeholder="name" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Video link</label>
					<div class="col-sm-2">
						<input type="text" name="video_link" value="<?php echo $row ['video_link']; ?>" class="form-control" placeholder="video_link" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Type</label>
					<div class="col-sm-2">
						<input type="text" name="type" value="<?php echo $row ['type']; ?>" class="form-control" placeholder="type" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ID course</label>
					<div class="col-sm-4">
						<input type="text" name="id_course" value="<?php echo $row ['id_course']; ?>" class="form-control" placeholder="id_course" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data content">
						<a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div> 
	</div> 
