<?php
include '../conn/koneksi.php';

$nik = $_POST ['nik'];
$nama = $_POST['nama'];
$jk	= $_POST['jk'];
$dinas = $_POST['dinas'];

 $input = mysqli_query($konek, "INSERT into tbl_anggota values('$nik','$nama','$jk','$dinas')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota_detil&nik=$nik'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota_input'>";
}

?>
