<?php 
include("header.php"); 
include("koneksi.php"); 
?>
	<div class="container">
		<div class="content">
			<h2>Lihat Course</h2>
			<hr/>
			
			<br />

			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>No.</th>
						<th>Nama Course</th>
						<th>Durasi</th>
						<th>ID Author</th>
						<th>Description course</th>
						<th>Thumbnail course</th>
						<th>Aksi</th>
					</tr>
					<?php
					$sql = mysqli_query($link, "SELECT * FROM course ORDER BY id ASC");
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
							echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['name'].'</td>
								<td>'.$row['duration'].'</td>
								<td>'.$row['id_author'].'</td>
								<td>'.$row['description'].'</td>
								<td>'.$row['thumbnail'].'</td>
								<td>
									
									<a href="edit.php?id='.$row['id'].'" title="Edit Data" data-toggle="tooltip" class="btn btn-primary btn-sm">Edit</a>
									<a href="hapus.php?id='.$row['id'].'" title="Hapus Data" data-toggle="tooltip" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['id'].'?\')" class="btn btn-danger btn-sm">Hapus</a>
								</td>
							</tr>
							';
							$no++; 
						}
					
					?>
				</table>
			</div> 
		</div> 
	</div> 