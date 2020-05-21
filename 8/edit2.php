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
			$sql = mysqli_query($link, "SELECT * FROM author WHERE id='$id'"); 
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){ 
				
				$name		     = $_POST['name'];


				$update = mysqli_query($link, "UPDATE author SET name='$name'") or die(mysqli_error()); 
				if($update){ 
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gembel.</div>';
					header("Location: edit.php?duration=".$duration."&pesan=sukses"); 
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
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data content">
						<a href="tampildata.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div> 
	</div> 
