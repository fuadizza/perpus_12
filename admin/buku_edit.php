<?php 
	include '../conn/koneksi.php';
	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
	
	$id		= $_GET['id'];
	
	$query = "SELECT * FROM tbl_buku WHERE id=$id";
	$sql = mysqli_query($konek,$query);
	$data = mysqli_fetch_array($sql);
	$id = $data['id'];
	$judul = $data['judul'];
	$penerbit = $data['penerbit'];
	$thn_terbit = $data['thn_terbit'];
	$kode_buku = $data['kode_buku'];
	$jumlah = $data['jumlah_buku'];
	$lokasi = $data['lokasi'];
?>

<!--Header-->
<div class="col-sm-10">
			<div class="well">
				<center>
				<img src="../logo.png" width=10% height=10% alt="">
				<h4>SELAMAT DATANG DI HALAMAN PORTALPERPUSTAKAAN DINAS KEPENDUDUKAN DAN CATATAN SIPIL</h4>
				<p>Silahkan Pilih Menu dibawah ini</p></center>
			</div>
		</div>


		<div class="col-sm-10">
			<div class="well">
				<form class="form-horizontal" action="?page=buku_proses_edit" method="post">
					<input type="hidden" name="id" value="<?php echo $id; ?>" />
					<input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
					
					
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="judul">Judul Buku:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="judul" placeholder="Judul Buku" name="judul" value="<?=$judul ?>">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Penerbit:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="penerbit" placeholder="Penerbit" name="penerbit" value="<?=$penerbit ?>">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Tahun Terbit:</label>
						  <div class="col-sm-8">
							<select class="form-control" name="thn_terbit" id="sel1">
									<option value="">Pilih Tahun</option>
										<option value="">Pilih Tahun</option>
										<option value="2019" <?php if( $thn_terbit=='2019'){echo "selected"; } ?>>2019</option>
										<option value="2018" <?php if( $thn_terbit=='2018'){echo "selected"; } ?>>2018</option>
										<option value="2017" <?php if( $thn_terbit=='2017'){echo "selected"; } ?>>2017</option>
										<option value="2016" <?php if( $thn_terbit=='2016'){echo "selected"; } ?>>2016</option>
										<option value="2015" <?php if( $thn_terbit=='2015'){echo "selected"; } ?>>2015</option>
										<option value="2014" <?php if( $thn_terbit=='2014'){echo "selected"; } ?>>2014</option>
										<option value="2013" <?php if( $thn_terbit=='2013'){echo "selected"; } ?>>2013</option>
										<option value="2012" <?php if( $thn_terbit=='2012'){echo "selected"; } ?>>2012</option>
										<option value="2011" <?php if( $thn_terbit=='2011'){echo "selected"; } ?>>2011</option>
										<option value="2010" <?php if( $thn_terbit=='2010'){echo "selected"; } ?>>2010</option>
										<option value="2009" <?php if( $thn_terbit=='2009'){echo "selected"; } ?>>2009</option>
										<option value="2008" <?php if( $thn_terbit=='2008'){echo "selected"; } ?>>2008</option>
										<option value="2007" <?php if( $thn_terbit=='2007'){echo "selected"; } ?>>2007</option>
										<option value="2006" <?php if( $thn_terbit=='2006'){echo "selected"; } ?>>2006</option>
										<option value="2005" <?php if( $thn_terbit=='2005'){echo "selected"; } ?>>2005</option>
										<option value="2004" <?php if( $thn_terbit=='2004'){echo "selected"; } ?>>2004</option>
										<option value="2003" <?php if( $thn_terbit=='2003'){echo "selected"; } ?>>2003</option>
										<option value="2002" <?php if( $thn_terbit=='2002'){echo "selected"; } ?>>2002</option>
										<option value="2001" <?php if( $thn_terbit=='2001'){echo "selected"; } ?>>2001</option>
										<option value="2000" <?php if( $thn_terbit=='2000'){echo "selected"; } ?>>2000</option>
										<option value="2010" <?php if( $thn_terbit=='1999'){echo "selected"; } ?>>1999</option>
										<option value="2009" <?php if( $thn_terbit=='1998'){echo "selected"; } ?>>1998</option>
										<option value="2008" <?php if( $thn_terbit=='1997'){echo "selected"; } ?>>1997</option>
										<option value="2007" <?php if( $thn_terbit=='1996'){echo "selected"; } ?>>1996</option>
										<option value="2006" <?php if( $thn_terbit=='1995'){echo "selected"; } ?>>1995</option>
										<option value="2005" <?php if( $thn_terbit=='1994'){echo "selected"; } ?>>1994</option>
										<option value="2004" <?php if( $thn_terbit=='1993'){echo "selected"; } ?>>1993</option>
										<option value="2003" <?php if( $thn_terbit=='1992'){echo "selected"; } ?>>1992</option>
										<option value="2002" <?php if( $thn_terbit=='1991'){echo "selected"; } ?>>1991</option>
										<option value="2001" <?php if( $thn_terbit=='1990'){echo "selected"; } ?>>1990</option>
										<option value="2000" <?php if( $thn_terbit=='2015'){echo "selected"; } ?>>2000</option>
								</select>
						  </div>
					</div>

					<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Kode Buku:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="isbn" placeholder="Kode Buku" name="kode_buku" value="<?=$kode_buku ?>">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="jumlah_buku">Jumbal Buku:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="jumlah_buku" placeholder="Jumlah Buku" name="jumlah_buku" value="<?=$jumlah ?>">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="lokasi">Lokasi:</label>
						  <div class="col-sm-8">
							<select class="form-control" name="lokasi" id="sel1">
									<option value="">Pilih Lokasi</option>
									<option value="1A" <?php if( $lokasi=='1A'){echo "selected"; } ?>>1A</option>
									<option value="1B" <?php if( $lokasi=='1B'){echo "selected"; } ?>>1B</option> 
									<option value="1C" <?php if( $lokasi=='1C'){echo "selected"; } ?>>1C</option>
									<option value="1D" <?php if( $lokasi=='1D'){echo "selected"; } ?>>1D</option>
									<option value="2A" <?php if( $lokasi=='2A'){echo "selected"; } ?>>2A</option>
									<option value="2B" <?php if( $lokasi=='2B'){echo "selected"; } ?>>2B</option> 
									<option value="2C" <?php if( $lokasi=='2C'){echo "selected"; } ?>>2C</option>
									<option value="2D" <?php if( $lokasi=='2D'){echo "selected"; } ?>>2D</option>
									<option value="3A" <?php if( $lokasi=='3A'){echo "selected"; } ?>>3A</option>
									<option value="3B" <?php if( $lokasi=='3B'){echo "selected"; } ?>>3B</option> 
									<option value="3C" <?php if( $lokasi=='3C'){echo "selected"; } ?>>3C</option>
									<option value="3D" <?php if( $lokasi=='3D'){echo "selected"; } ?>>3D</option>
									<option value="4A" <?php if( $lokasi=='4A'){echo "selected"; } ?>>4A</option>
									<option value="4B" <?php if( $lokasi=='4B'){echo "selected"; } ?>>4B</option> 
									<option value="4C" <?php if( $lokasi=='4C'){echo "selected"; } ?>>4C</option>
									<option value="4D" <?php if( $lokasi=='4D'){echo "selected"; } ?>>4D</option>
									<option value="5A" <?php if( $lokasi=='5A'){echo "selected"; } ?>>5A</option>
									<option value="5B" <?php if( $lokasi=='5B'){echo "selected"; } ?>>5B</option> 
									<option value="5C" <?php if( $lokasi=='5C'){echo "selected"; } ?>>5C</option>
									<option value="5D" <?php if( $lokasi=='5D'){echo "selected"; } ?>>5D</option>
									<option value="6A" <?php if( $lokasi=='6A'){echo "selected"; } ?>>6A</option>
									<option value="6B" <?php if( $lokasi=='6B'){echo "selected"; } ?>>6B</option> 
									<option value="6C" <?php if( $lokasi=='6C'){echo "selected"; } ?>>6C</option>
									<option value="6D" <?php if( $lokasi=='6D'){echo "selected"; } ?>>6D</option>
									<option value="7A" <?php if( $lokasi=='7A'){echo "selected"; } ?>>7A</option>
									<option value="7B" <?php if( $lokasi=='7B'){echo "selected"; } ?>>7B</option> 
									<option value="7C" <?php if( $lokasi=='7C'){echo "selected"; } ?>>7C</option>
									<option value="7D" <?php if( $lokasi=='7D'){echo "selected"; } ?>>7D</option>
								</select>
						  </div>
					</div>
					
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" value="simpan" class="btn btn-default">Simpan</button>
					  </div>
					</div>
					
					
				</form>
				<button onclick="window.location.href='?page=buku'" class="btn btn-default">Kembali</button>
				
				
			</div>
		</div>
		
		
		
		
