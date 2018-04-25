<?php 
include '../conn/koneksi.php';
$nik = $_GET['nik'];
$query = "SELECT * FROM tbl_anggota where nik='$nik'";
$sql = mysqli_query($konek,$query);
$data = mysqli_fetch_array($sql);
$ni = $data['nik'];
$nama = $data['nama'];
$jk = $data['jk'];
$prodi = $data['dinas'];

?>
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Edit Anggota</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=anggota_proses_edit" method="post">
          <input type="hidden" name="nik" size="50%" value="<?php echo $nik; ?>"></td>
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">NIK</td>
                    <td><input type="text" name="nik1" size="50%" value="<?php echo $nik; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jenis Kelamin</td>
                    <td><?php if ($data['jk'] === "L") : ?>
                    <input type="radio" name="jk" value="L" checked />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" />Perempuan</label>
                    <?php else : ?>
            		<input type="radio" name="jk" value="L" />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" checked />Perempuan</label>
            		<?php endif; ?>
                    	</select>
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Prodi</td>
                    <td><select name="dinas">
                    		<option>Pilih Prodi</option>
                            <option value="Dinas Kesehatan" <?php if ($prodi=='Dinas Kesehatan') {echo "selected";} ?>>Sistem Informasi</option>
                            <option value="Dinas Kependudukan dan Catatan Sipil"  <?php if ($prodi=='Dinas Kependudukan dan Catatan Sipil') {echo "selected";} ?>>Komputer Akuntansi</option>
                    	</select>
                    </td>
                </tr>               
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=anggota">Kembali</td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>