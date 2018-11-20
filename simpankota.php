<?php

include "koneksi.php";

$nama_prov = $_POST['namaprov'];
$kode_kota = $_POST['kode_kota'];
$nama_kota = $_POST['nama_kota'];


$query = "INSERT INTO kota VALUES('$nama_prov','$kode_kota','$nama_kota')";
mysqli_query($conn,$query);
if (mysqli_affected_rows($conn)>0)
{
	echo "<script>document.location.href='kota.php'</script>";
}
?>