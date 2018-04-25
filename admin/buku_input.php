<?php 
	include 'conn/koneksi.php';
	$waktu = date('Y-m-d H:i:s');
?>

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
			<div class="well">
				<form class="form-horizontal" action="?page=buku_proses" method="post">
					<input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="judul">Judul Buku:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="judul" placeholder="Judul Buku" name="judul">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Penerbit:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="penerbit" placeholder="Penerbit" name="penerbit">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Tahun Terbit:</label>
						  <div class="col-sm-8">
							<select class="form-control" name="thn_terbit" id="sel1">
									<option value="">Pilih Tahun</option>
									<option value="2017">2017</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
									<option value="1997">1997</option>
									<option value="1996">1996</option>
									<option value="1995">1995</option>
									<option value="1994">1994</option>
									<option value="1993">1993</option>
									<option value="1992">1992</option>
									<option value="1991">1991</option>
									<option value="1990">1990</option>
								</select>
						  </div>
					</div>

					<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Kode Buku:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="isbn" placeholder="Kode Buku" name="kode_buku">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="jumlah_buku">Jumbal Buku:</label>
						  <div class="col-sm-8">
							<input type="text" class="form-control" id="jumlah_buku" placeholder="Jumlah Buku" name="jumlah_buku">
						  </div>
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="lokasi">Lokasi:</label>
						  <div class="col-sm-8">
							<select class="form-control" name="lokasi" id="sel1">
									<option value="">Pilih Lokasi</option>
									<option value="1A">1A</option>
									<option value="1B">1B</option>
									<option value="1C">1C</option>
									<option value="1D">1D</option>
									<option value="2A">2A</option>
									<option value="2B">2B</option>
									<option value="2C">2C</option>
									<option value="2D">2D</option>
									<option value="3A">3A</option>
									<option value="3B">3B</option>
									<option value="3C">3C</option>
									<option value="3D">3D</option>
									<option value="4A">4A</option>
									<option value="4B">4B</option>
									<option value="4C">4C</option>
									<option value="4D">4D</option>
									<option value="5A">5A</option>
									<option value="5B">5B</option>
									<option value="5C">5C</option>
									<option value="5D">5D</option>
									<option value="6A">6A</option>
									<option value="6B">6B</option>
									<option value="6C">6C</option>
									<option value="6D">6D</option>
									<option value="7A">7A</option>
									<option value="7B">7B</option>
									<option value="7C">7C</option>
									<option value="7D">7D</option>
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
	


