    <div class="col-sm-10">
            <div class="well">
                <center>
                <img src="../logo.png" width=10% height=10% alt="">
                <h4>SELAMAT DATANG DI HALAMAN PORTALPERPUSTAKAAN DINAS KEPENDUDUKAN DAN CATATAN SIPIL</h4>
                
            </div>
        </div>
    
    
    <!-- menu tengah -->
    <div class="col-sm-10">
        <div class="well">
            <form class="form-horizontal" action="?page=user_proses" method="post">
            
                <div class="form-group">
                    <label class="control-label col-sm-2" for="judul">Nama Lengkap :</label>
                        <div class="col-sm-8">
                        <input type="text" id="nama" name="nama" class="form-control" required="required">
                            
                        </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="judul">Username :</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name="username"  required="required">
                            
                        </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="judul">Password :</label>
                        <div class="col-sm-8">
                        <input type="text"  class="form-control" id="password" name="password"  required="required">
                            
                        </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="judul">Email :</label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" required="required">
                           
                        </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="judul">Foto :</label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <img src="" width="190" height="170">
                            <input type="file" name="foto">
                        </label>
                       
                    </div>
                </div>
                
                <div class="form-group">
                          <label class="control-label col-sm-2" for="email">Group User:</label>
                          <div class="col-sm-8">
                            <select id="level" name="level">
                            <option>Pilih User</option>
                            <option value="admin">Administrator</option>
                            <option value="user">User</option>                    
                        </select>

                          
                                
                          </div>
                </div>
                
              
                
                <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" value="simpan" class="btn btn-default">Simpan</button>
                      </div>
                    </div>
            
            </form>
            
            <button onclick="window.location.href='?page=user'" class="btn btn-default">Kembali</button>
        </div>
    </div>


    


  