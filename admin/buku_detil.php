    <?php include '../conn/koneksi.php'; ?>
    
	
	<div class="col-sm-10">
			<div class="well">
				<center>
				<img src="../logo.png" width=10% height=10% alt="">
				<h4>SELAMAT DATANG DI HALAMAN PORTALPERPUSTAKAAN DINAS KEPENDUDUKAN DAN CATATAN SIPIL</h4>
				<p>Silahkan Pilih Menu dibawah ini</p></center>
			</div>
		</div>
	
	
	
	
	<!-- menu tengah -->
		<div class="col-sm-10">
			<div class="thumbnail">
			<center><h4>Detail Buku</h4></center>
				<table class="table table-striped">
			<?php
            $judul	= isset($_GET['judul']) ? $_GET['judul'] : "";
			$query = mysqli_query($konek,"SELECT * FROM tbl_buku WHERE judul='$judul'");
			$data = mysqli_fetch_array($query);
			?>
			<tbody>
			  <tr>
				<td width="30%" align="right">Judul Buku</td>
                <td width="2%">:</td>
                <th><?php echo $data[1]; ?></th>
			  </tr>
			  <tr>
				<td width="30%" align="right">Penerbit</td>
                <td width="2%">:</td>
                <td><?php echo $data[2]; ?></td>
			  </tr>
			  <tr>
				<td width="30%" align="right">Tahun Terbit</td>
                <td width="2%">:</td>
                <td><?php echo $data[3]; ?></td>
			  </tr>
			  <tr>
				<td width="30%" align="right">Kode Buku</td>
                <td width="2%">:</td>
                <td><?php echo $data[4]; ?></td>
			  </tr>
			  <tr>
				<td width="30%" align="right">Jumlah Buku</td>
                <td width="2%">:</td>
                <td><?php echo $data[5]; ?></td>
			  </tr>
			  <tr>
				<td width="30%" align="right">Lokasi</td>
                <td width="2%">:</td>
                <td><?php echo $data[6]; ?></td>
			  </tr>
			  <tr>
				<td width="30%" align="right">Tanggal Inpput</td>
                <td width="2%">:</td>
                <td><?php echo $data[7]; ?></td>
			  </tr>
			</tbody>
		  </table>
		  <button onclick="window.location.href='?page=buku'" class="btn btn-default">Kembali</button>
				
			</div>
		</div>
	
	
	
	
	
	