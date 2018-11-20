<?php

include "koneksi.php";

$kode_prov = $_POST['kode_prov'];
$nama = $_POST['nama_prov'];

$query = "INSERT INTO provinsi VALUES('$kode_prov','$nama')";
mysqli_query($conn,$query);
if (!query) 
{
	die('Data Gagal Disimpan').mysqli_error();	
}
else
{
header('location:provinsi.php');
}
?>