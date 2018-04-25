   <?php
   include '../conn/koneksi.php';
   include 'transaksi_fungsi.php';
   ?>
   
   <div class="col-sm-10">
			<div class="well">
			<center>
				<img src="../logo.png" width=10% height=10% alt="">
				<h4>SELAMAT DATANG DI HALAMAN PORTALPERPUSTAKAAN DINAS KEPENDUDUKAN DAN CATATAN SIPIL</h4>
				<p>Silahkan Pilih Menu dibawah ini</p>
			</center>
			</div>
		</div>
   
   
   <!-- menu tengah -->
   <div class="col-sm-10">
		<div class="thumbnail">
			<center><h4>Table Transaksi</h4></center>
			
			<form action="?page=transaksi_search" method="post" class="form-inline">
					<table width="100%" height="100%" style="border:1px solid #fff;">
						<tr>
							<td width="50%"><button onclick="window.location.href='?page=transaksi_input'" type="button" class="btn btn-danger">
								<span class="glyphicon glyphicon-add"></span> Input Transaksi</button>
							</td>
							
							
							<td width="50%" align="right"><input type="text" class="form-control" id="nama" name="cari" placeholder="Nama Peminjam"></td>
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
							<th>Peminjam</th>
							<th>Tgl Pinjam</th>
							<th>Tgl Kembali</th>
							<th>Terlambat</th>
							<th align="center">Kembali</th>
							<th align="center">Perpanjang</th>
						  </tr>
						</thead>
								
								 <?php
									$query = "SELECT * FROM tbl_transaksi WHERE status='Pinjam' ORDER by id";
									$sql = mysqli_query($konek,$query);
									$total = mysqli_num_rows($sql);
									$no = 1;
									
									while ($data=mysqli_fetch_array($sql)) {
								?>
								
								<tbody>
								  <tr>
									<td align="center"><?php echo $no; ?></td>
									<td><?php echo $data['judul']; ?></a></td>
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo $data['tgl_pinjam']; ?></td>
									<td><?php echo $data['tgl_kembali']; ?></td>
									<td>
									<?php
										$tgl_dateline=$data['tgl_kembali'];
										$tgl_kembali=date('d-m-Y');
										$lambat=terlambat($tgl_dateline, $tgl_kembali);
										$denda=$lambat*$denda1;
										if ($lambat>0) {
											echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
										}
										else {
											echo $lambat." hari";
										}
									?>
									
									</td>
									<td> 
											<button  type="button" class="btn btn-default btn-sm">
											  <a href="?page=transaksi_proses_kembali&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']; ?>"><span class="glyphicon glyphicon-plus"></span></a>
											</button> 
									</td>
									<td>
									<button  type="button" class="btn btn-default btn-sm">
											  <a href="?page=transaksi_proses_perpanjang&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul'];?>&tgl_kembali=<?php echo $data['tgl_kembali']; ?>&lambat=<?php echo $lambat; ?>"><span class="glyphicon glyphicon-plus"></span></a>
											</button>
									</td>
								  </tr>              
								<?php $no++; } ?>
								</tbody>
					</table>
					<table width="100%" style="border:0px solid #9cc;">
						<tr>
							<th width="50%">Jumlah : <?php echo $total; ?> Transaksi</th>
							
						</tr>
					</table>
				</div>
			</div>
		</div>
			
			
		</div>
   </div>
   
   
	