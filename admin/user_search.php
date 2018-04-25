     <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- Header -->
   <div class="col-sm-10">
      <div class="well">
        
        <center>
        <img src="../logo.png" width=10% height=10% alt="">
        <h4>SELAMAT DATANG DI HALAMAN PORTALPERPUSTAKAAN DINAS KEPENDUDUKAN DAN CATATAN SIPIL</h4>
        
      </div>
    </div>
    
    <!-- menu tengah -->
    <div class="col-sm-10">
      <div class="thumbnail">
        <center><h4>Table Data User</h4></center>
        <form action="?page=user_search" method="post" class="form-inline">
          <table width="100%" height="100%" style="border:1px solid #fff;">
            <tr>
              <td width="50%"><button onclick="window.location.href='?page=user_input'" type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-add"></span> Input User</button>
              </td>
              
              
              <td width="50%" align="right"><input type="text" class="form-control" name="cari" placeholder="cari nama, username"></td>
              <td><button type="submit" class="btn btn-danger">Submit</button></td>
            </tr>
          
          </table>
            </form>
        <div class="table-responsive">          
          <table class="table">
            <thead align="center">
              <tr>
             <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Level</th>
              
              <th>Edit</th>
              <th>Hapus</th>
              </tr>
            </thead>
                
                <?php
                  include '../conn/koneksi.php';
                    $cari = $_POST['cari'];
        $query = "SELECT * FROM tbl_user WHERE nama like '%$cari%' OR username like '%$cari%' ";
        $sql = mysql_query($query);
        $total = mysql_num_rows($sql);
        $no = 1;
        
        while ($data=mysql_fetch_array($sql)) {
      ?>
                <tbody>
                  <tr>
                  <td align="center"><?php echo $no; ?></td>
                          <td><a href="?page=user_detil&id=<?=$data['id']?>"><?php echo $data['nama']; ?></a></td>
                          <td><?php echo $data['email']; ?></td>
                          <td><?php echo $data['level']; ?></td>
                          <td align="center"><a href="?page=user_edit&id=<?=$data['id']?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                          <td align="center"><a href="?page=user_hapus&id=<?=$data['id']?>" onclick="return confirm('Anda yakin ingin menghapus data user <?=$data['nama']?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>

                  
                  </tr>
                  
                <?php $no++; } ?>
                </tbody>
          </table>
          
          <table width="100%" style="border:0px solid #9cc;">
            <tr>
              <th width="50%">Jumlah : <?php echo $total; ?> User</th>
            </tr>
          
          </table>
        </div>
      </div>
    </div>
  


  