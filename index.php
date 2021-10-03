<!DOCTYPE html>
<html>
<head>
	<title>Add Delete Multiple Data</title>
</head>
<body>

<form action="del.php" method="POST">
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td>No</td>
		<td>Anime</td>
		<td></td>
	</tr>
	
	<?php include '../koneksi.php';
	$no = 1;
	$query = mysqli_query($awaw,"SELECT * FROM tbl_anime ORDER BY nama ASC");
	while ($data = mysqli_fetch_array($query)) { ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><input type="checkbox" name="del[]" value="<?php echo $data['id'];?>">
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan="2"></td>
		<td><input type="submit" name="hapus" value="Hapus"></td>
	</tr>
</table>
</form>


<br><br>
Tambah Anime : <br>
<form action="add.php" method="POST">
	<input type="text" name="nama[]"><br><br>
	<input type="text" name="nama[]"><br><br>
	<input type="text" name="nama[]"><br><br>
	<input type="submit" name="submit" value="Tambah">
</form>


</body>
</html>