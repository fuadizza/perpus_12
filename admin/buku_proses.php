<?php
include '../conn/koneksi.php';

$judul = $_POST ['judul'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['thn_terbit'];
$kode_buku	= $_POST['kode_buku'];
$jumlah = $_POST['jumlah_buku'];
$lokasi = $_POST['lokasi'];
echo $tgl = $_POST['tgl_input'];
		

   $input = mysqli_query($konek,"INSERT into tbl_buku values(NULL,'$judul','$penerbit','$tahun','$kode_buku','$jumlah','$lokasi','$tgl')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=detil-buku&judul=$judul'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input-buku'>";	
}

?>
