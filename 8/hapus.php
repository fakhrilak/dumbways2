<?php 

include 'koneksi.php';
 
$id = $_GET['id'];
 
 

mysqli_query($link,"DELETE FROM course WHERE id='$id'");
 

	header("location: tampildata.php");	

 
?>