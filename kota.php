<?php
	include 'koneksi.php';
	
	$query = "SELECT * FROM provinsi";
	$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="simpankota.php" method="POST">
	<table border="1">
		<tr>
			<td>Nama Provinsi </td> 
			<td>
				<select name="namaprov">
					<?php while($datakota = mysqli_fetch_assoc($result)) { ?>
						<option value="<?php echo $datakota['nama_provinsi'] ; ?>"><?php echo $datakota['nama_provinsi'];?></option>
					<?php }; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kode Kota : </td>
			<td><input type="text" name="kode_kota"></td>
		</tr>
		<tr>
			<td>Nama Kota : </td>
			<td><input type="text" name="nama_kota"></td>	
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>

	</table>
</form>

<br><br>
	<table border="1">
		<tr>
			<td>Nama Provinsi</td>
			<td>Kode Kota</td>
			<td>Nama Kota</td>
		</tr>
		<?php 
	include "koneksi.php";
	$query = "SELECT * FROM kota";
	$result = mysqli_query($conn,$query);
	while ($data = mysqli_fetch_assoc($result)) { ?>
		<tr>
		<td><?php echo $data['nama_prov'];?></td>
		<td><?php echo $data['kode_kota'];?></td>
		<td><?php echo $data['nama_kota'];?></td>
		</tr>
			<?php }
 ?>
	</table>
</body>
</html>