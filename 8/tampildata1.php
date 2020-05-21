<?php 
include("header.php"); 
include("koneksi.php"); 
?>
	<div class="container">
		<div class="content">
			<h2>Lihat Content</h2>
			<hr/>
			
			<br />

			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>No.</th>
						<th>Nama content</th>
						<th>Video link</th>
						<th>Type</th>
						<th>ID course</th>
						<th>Aksi</th>
					</tr>
					<?php
					$sql = mysqli_query($link, "SELECT * FROM content ORDER BY id ASC");
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
							echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['name'].'</td>
								<td>'.$row['video_link'].'</td>
								<td>'.$row['type'].'</td>
								<td>'.$row['id_course'].'</td>
								<td>
									
									<a href="edit1.php?id='.$row['id'].'" title="Edit Data" data-toggle="tooltip" class="btn btn-primary btn-sm">Edit</a>
									<a href="hapus1.php?id='.$row['id'].'" title="Hapus Data" data-toggle="tooltip" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['id'].'?\')" class="btn btn-danger btn-sm">Hapus</a>
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