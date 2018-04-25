<?php
include '../conn/koneksi.php';

$nik = $_POST['nik'];
$nik1 = $_POST ['nik1'];
$nama = $_POST['nama'];
$jk	= $_POST['jk'];
$dinas = $_POST['dinas'];

$input = mysqli_query($konek,"UPDATE tbl_anggota SET nik='$nik1',
 											nama='$nama',
											jk='$jk',
											dinas='$dinas'
											where nik ='$nik'
											");
 
if ($input) {
	echo "<script> alert('Data berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";	
}
else {
	echo "<script> alert('Data Gagal Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input-anggota'>";
}

?>
