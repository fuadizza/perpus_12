<?php
include 'conn/koneksi.php';
$pinjam			= date("d-m-Y");
$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali		= date("d-m-Y", $tuju_hari);
?>



<!-- menu tengah -->
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
        <form class="form-horizontal" action="?page=transaksi_proses" method="post">
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="judul">Judul Buku:</label>
                    <div class="col-sm-8">
                            <select name ="buku" class="form-control" id="sel1">
                                <option>Pilih Judul Buku</option>
                                    <?php
                                        $query = "SELECT * FROM tbl_buku ORDER by id";
                                        $sql = mysqli_query($konek,$query);
                                        while ($buku=mysqli_fetch_array($sql)) {
                                            echo "<option value='$buku[0].$buku[1]'>$buku[1]</option>";
                                        }
                                        
                                    ?>
                            </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="judul">Isi Nama Peminjam:</label>
                    <div class="col-sm-8">
                        <select name="peminjam" class="form-control" id="sel1">
                            <option>Pilih Peminjam</option>
                            <?php 
                                $query = "SELECT * FROM tbl_anggota ORDER by nik";
                                $sql = mysqli_query($konek,$query);
                                while ($nama=mysqli_fetch_array($sql)) {
                                echo "<option value='$nama[0].$nama[1]'>$nama[0]. $nama[1]</option>";
                                }
                        
                            ?>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="judul">Tanggal Pinajam Buku:</label>
                    <div class="col-sm-8">
                        <input  class="form-control" id="inputdefault" type="text" name="tgl_pinjam" size="30%" value="<?php echo $pinjam; ?>" readonly="readonly">
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="judul">Tanggal Pengembalian Buku:</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="inputdefault" type="text" name="tgl_kembali" size="30%" value="<?php echo $kembali; ?>" readonly="readonly">
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="judul">Keterangan:</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="inputdefault" type="text" name="ket">
                    </div>
            </div>

            <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" value="simpan" class="btn btn-default">Simpan</button>
                      </div>
            </div>

        </form>

        <button onclick="window.location.href='?page=transaksi'" class="btn btn-default">Kembali</button>
    </div>
</div>




	