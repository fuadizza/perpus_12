       <?php
           include '../conn/koneksi.php';
        ?>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-md-3">
        <div class="well">
          <h3 class="text-danger">1. Laporan<br>Buku</h3>
          <a href="../print-buku.php" target="_blank" class="btn btn-danger btn-lg">
              <span class="glyphicon glyphicon-print"></span> Print 
            </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <h3 class="text-success">2. Laporan<br>Anggota</h3>
          <a href="../print-anggota.php" target="_blank" class="btn btn-success btn-lg">
              <span class="glyphicon glyphicon-print"></span> Print 
            </a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="well">
          <h3 class="text-primary">3. Laporan<br>Transaksi</h3>
          <a href="../print-transaksi.php" target="_blank" class="btn btn-primary btn-lg">
              <span class="glyphicon glyphicon-print"></span> Print 
            </a>
        </div>
      </div>
    </div><!--/row-->    
  </div><!--/col-12-->
</div><!--/row-->


   <!-- <div class="table_input">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
            <tbody>
            	<tr>
                	<td width="30%"><a href="../print-buku.php" class="lap" target="_blank">1. Laporan Buku</a></td>
                </tr>
                <tr>
                	<td width="30%"><a href="../print-anggota.php" class="lap" target="_blank">2. Laporan Anggota</a></td>
                </tr>
                <tr>
                	<td width="30%"><a href="../print-transaksi.php" class="lap" target="_blank">3. Laporan Transaksi</a></td>
                </tr>
                
            </tbody>
          </table>
 	      </div>-->