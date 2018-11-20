<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="simpan.php" method="POST">
	<table border="1">
		<tr><td>Kode Provinsi : <input type="text" name="kode_prov"></td></tr>
		<tr><td>Nama Provinsi : <input type="text" name="nama_prov"></td><br></tr>
		<tr><td><input type="submit" name="submit" value="Simpan"></td></tr>

	</table>
</form>

<br><br>
	<table border="1">
		<tr>
			<td>Kode Provinsi</td>
			<td>Nama Provinsi</td>
		</tr>
<?php 
	include "koneksi.php";
	$query = "SELECT * FROM provinsi";
	$result = mysqli_query($conn,$query);
	while ($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
		<td><?php echo $data['kode_prov'];?></td>
		<td><?php echo $data['nama_provinsi'];?></td>
		</tr>
			<?php }
 ?>
	</table>
</body>
</html>