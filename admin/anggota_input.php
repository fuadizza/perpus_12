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
			<form class="form-horizontal" action="?page=anggota_proses" method="post">
			
				<div class="form-group">
					<label class="control-label col-sm-2" for="judul">NIM :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="nik" placeholder="NIK" name="nik">
						</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="judul">Nama Lengkap :</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
						</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-sm-2" for="judul">Jenis Kelamin :</label>
					<div class="col-sm-8">
						<label class="radio-inline">
							<input type="radio" name="jk" value="L">Laki-laki
						</label>
						<label class="radio-inline">
							<input type="radio" name="jk" value="P">Perempuan
						</label>
					</div>
				</div>
				
				<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Dinas :</label>
						  <div class="col-sm-8">
							<select class="form-control" name="dinas" id="sel1">
									<option value="">Pilih Dinas</option>
									<option value="Dinas Kependudukan dan Catatan Sipil">Dinas Kependudukan dan Catatan Sipil</option>
									<option value="Dinas Kesehatan">Dinas Kesehatan</option>
									
								</select>
						  </div>
				</div>
			
				<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" value="simpan" class="btn btn-default">Simpan</button>
					  </div>
					</div>
			
			</form>
			
			<button onclick="window.location.href='?page=anggota'" class="btn btn-default">Kembali</button>
		</div>
	</div>


	