<?php
include '../koneksi.php';

$del = $_POST['del'];
$jumlah = count($del);

for ($i=0; $i < $jumlah; $i++) { 
	mysqli_query($awaw, "DELETE FROM tbl_anime WHERE id='$del[$i]'");
}

header("location:index.php");

?>