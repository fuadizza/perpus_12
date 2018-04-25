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
        <center><h4>Table Data Anggota</h4></center>
        <form action="?page=anggota_search" method="post" class="form-inline">
          <table width="100%" height="100%" style="border:1px solid #fff;">
            <tr>
              <td width="50%"><button onclick="window.location.href='?page=anggota_input'" type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-add"></span> Input Anggota</button>
              </td>
              
              
              <td width="50%" align="right"><input type="text" class="form-control" id="nama" name="cari" placeholder="NIK, Nama Anggota"></td>
              <td><button type="submit" class="btn btn-danger">Submit</button></td>
            </tr>
          
          </table>
            </form>
        
        <div class="table-responsive">          
          <table class="table">
            <thead align="center">
              <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Dinas</th>
              <th>Edit</th>
              <th>Hapus</th>
              </tr>
            </thead>
                
                <?php
                  include '../conn/koneksi.php';
                  $cari = $_POST['cari'];
                  $query = "SELECT * FROM tbl_anggota where nik like '%$cari%' OR nama like '%$cari%' ";
                  $sql = mysqli_query($konek,$query);
                  $total = mysqli_num_rows($sql);
                  $no = 1;
                
                    while ($data=mysqli_fetch_array($sql)) {
                ?>
                
                <tbody>
                  <tr>
                  <td align="center"><?php echo $no; ?></td>
                    <td ><a href="?page=anggota_detil&nik=<?php echo $data['nik']; ?>"class="detil"><?php echo $data['nik']; ?></a></td>
                    <td ><?php echo $data['nama']; ?></td>
                    <td ><?php echo $data['dinas']; ?></td>

                    <td ><a href="?page=anggota_edit&nik=<?php echo $data['nik'];?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                    <td ><a href="?page=anggota_hapus&nik=<?php echo $data['nik']; ?>" onclick="return confirm('Anda yakin ingin menghapus Anggota <?php echo $data['nama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
                  </tr>
                  
                <?php $no++; } ?>
                </tbody>
          </table>
          <table class="table" width="100%" style="border:0px solid #9cc;">
              <tr>
                <th width="50%">Jumlah : <?php echo $total; ?> Anggota</th>
                
              </tr>
          </table>
        </div>
      </div>
    </div>
   
   
   
   
   
  