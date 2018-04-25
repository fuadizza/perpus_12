<?php
include '../conn/koneksi.php';

$nik= $_GET['nik'];
$query = mysqli_query($konek,"DELETE FROM tbl_anggota WHERE nik='$nik'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	}


?>