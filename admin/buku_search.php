	   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- Header -->
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
				<center><h4>Table Data Buku</h4></center>
				<form action="?page=buku_search" method="post" class="form-inline">
					<table width="100%" height="100%" style="border:1px solid #fff;">
						<tr>
							<td width="50%"><button onclick="window.location.href='?page=buku_input'" type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-add"></span> Input Buku</button>
							</td>
							
							
							<td width="50%" align="right"><input type="text" class="form-control" id="nama" name="cari" placeholder="Judul Buku, Pengarang"></td>
							<td><button type="submit" class="btn btn-danger">Submit</button></td>
						</tr>
					
					</table>
            </form>
				<div class="table-responsive">          
					<table class="table">
						<thead align="center">
						  <tr>
							<th>No</th>
							<th>Judul Buku</th>
							<th>Kode Buku</th>
							<th>Penerbit</th>
							<th>Jumlah</th>
							<th>Edit</th>
							<th>Hapus</th>
						  </tr>
						</thead>
								
								<?php
									include '../conn/koneksi.php';
									$cari = $_POST['cari'];
									$query = "SELECT * FROM tbl_buku where judul like '%$cari%' OR lokasi like '%$cari%' ";
									$sql = mysqli_query($konek,$query);
									$total = mysqli_num_rows($sql);
									$no = 1;
									
									while ($data=mysqli_fetch_array($sql)) {
								?>
								<tbody>
								  <tr>
									<td><?php echo $no; ?></td>
									<td><a href="?page=detil-buku&judul=<?php echo $data['judul']; ?>" class="detil"><?php echo $data['judul']; ?></a></td>
									<td><?php echo $data['kode_buku']; ?></td>
									<td><?php echo $data['penerbit']; ?></td>
									<td><?php echo $data['jumlah_buku']; ?></td>
									<td><a href="?page=buku_edit&id=<?php echo $data['id']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
									<td><a href="?page=buku_hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data buku <?php echo $data['judul']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
									
								  </tr>
								  
								<?php $no++; } ?>
								</tbody>
					</table>
					
					<table width="100%" style="border:0px solid #9cc;">
						<tr>
							<th width="50%">Jumlah : <?php echo $total; ?> buku</th>
						</tr>
					
					</table>
				</div>
			</div>
		</div>
	