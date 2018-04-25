<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sistem Informasi Perpustakaan </title>
	<link rel="stylesheet" type="text/css" href="../images/style.css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	
<style type="text/css">
	 
</style>


</head>
<body>
<!-- menu main sebagai div Utama -->

	<!-- menu Header -->
	
	
    
    
    <!-- menu Header -->
    <!--<div id="menu-atas">
    	<div id="menu_user">
        <span><?=$_SESSION['nama'];?></span>
        </div>
        <div id="menu_tanggal" align="right">
        <span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?>
        </span>
        </div>
    </div>-->
    
    
  
	
    <nav class="navbar navbar-default sidebar " role="navigation" >
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	<a class="navbar-brand" href="#">
          <img src="../logo-perpus.png"  height="30" alt="">
        </a>      
    </div>
	
	
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php" class="menu">Home <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>          
        <li ><a href="?page=buku" class="menu">Buku <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>        
		<li ><a href="?page=anggota" class="menu">Anggota <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
		<li ><a href="?page=transaksi" class="menu">Transaksi <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer"></span></a></li>
		<li ><a href="?page=laporan" class="menu">Laporan <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-file"></span></a></li>
		<li ><a href="?page=user" class="menu">User <span style="font-size:16px;" class="pull-right hidden-xs showopacity 	glyphicon glyphicon-user"></span></a></li>
		<li ><a href="../logout.php" class="menu">Logout <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "../home.php";
						break;
						
						// menu buku				
						case "buku";
						include "buku_data.php";
						break;
						case "detil-buku";
						include "buku_detil.php";
						break;
						case "buku_input";
						include "buku_input.php";
						break;
						case "buku_proses";
						include "buku_proses.php";
						break;
						case "buku_search";
						include "buku_search.php";
						break;
						case "buku_edit";
						include "buku_edit.php";
						break;
						case "buku_proses_edit";
						include "buku_proses_edit.php";
						break;
						case "buku_hapus";
						include "buku_hapus.php";
						break;
												
						// anggota
						case "anggota";
						include "anggota_data.php";
						break;
						case "anggota_detil";
						include "anggota_detil.php";
						break;
						case "anggota_input";
						include "anggota_input.php";
						break;
						case "anggota_proses";
						include "anggota_proses.php";
						break;
						case "anggota_search";
						include "anggota_search.php";
						break;
						case "anggota_edit";
						include "anggota_edit.php";
						break;
						case "anggota_proses_edit";
						include "anggota_proses_edit.php";
						break;
						case "anggota_hapus";
						include "anggota_hapus.php";
						break;
						
						
						// transaksi
						case "transaksi";
						include "../transaksi_data.php";
						break;
						case "transaksi_input";
						include "../transaksi_input.php";
						break;
						case "transaksi_proses";
						include "../transaksi_proses.php";
						break;
						case "transaksi_search";
						include "../transaksi_search.php";
						break;
						case "transaksi_proses_kembali";
						include "../transaksi_proses_kembali.php";
						break;
						case "transaksi_proses_perpanjang";
						include "../transaksi_proses_perpanjang.php";
						break;
						
						
						// laporan
						case "laporan";
						include "../laporan.php";
						break;
						
						// User
						case "user";
						include "user_data.php";
						break;
						case "user_search";
						include "user_search.php";
						break;
						case "user_input";
						include "user_input.php";
						break;
						case "user_proses";
						include "user_proses.php";
						break;
						case "user_detil";
						include "user_detil.php";
						break;
						case "user_edit";
						include "user_edit.php";
						break;
						case "user_proses_edit";
						include "user_proses_edit.php";
						break;
						case "user_hapus";
						include "user_hapus.php";
						break;
					
					}
			?>

    

    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
  	<!-- menu Footer -->
    <!--<div id="footer"><center>Iqbal Rizqi Purnama &copy; 2015</center></div>-->
    

</body>
</html>

<?php } ?>