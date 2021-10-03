<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$jumlah = count($nama);

for ($i=0; $i < $jumlah; $i++) { 
	if($nama[$i]==''){
	} else {
		mysqli_query($awaw, "INSERT INTO tbl_anime(nama) VALUES('$nama[$i]')");
	}
}

header("location:index.php");

?>