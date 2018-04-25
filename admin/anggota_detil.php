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
            <center><h4>Detail Anggota</h4></center>
                <table class="table table-striped">
            <?php
            $nik    = isset($_GET['nik']) ? $_GET['nik'] : "";
            $query=mysqli_query($konek,"SELECT * FROM tbl_anggota WHERE nik='$nik'");
            $data = mysqli_fetch_array($query);
            ?>
            <tbody>
              <tr>
                <td width="30%" align="right">NIK</td>
                <td width="2%">:</td>
                <th><?php echo $data[0]; ?></th>
              </tr>
              <tr>
                <td width="30%" align="right">Nama</td>
                <td width="2%">:</td>
                <td><?php echo $data[1]; ?></td>
              </tr>
              <tr>
                <td width="30%" align="right">Jenis Kelamin</td>
                <td width="2%">:</td>
                <td><?php echo $data[2]; ?></td>
              </tr>
              <tr>
                <td width="30%" align="right">Dinas</td>
                <td width="2%">:</td>
                <td><?php echo $data[3]; ?></td>
              </tr>
            </tbody>
          </table>
          <button onclick="window.location.href='?page=anggota'" class="btn btn-default">Kembali</button>
                
            </div>
        </div>
