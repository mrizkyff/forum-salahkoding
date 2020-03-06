<body>
	<br>
	<br>
	<br>
	 <!-- awal modal register admin-->
            <div class="card text-left" style="width: 30%;margin: 0 auto;float: none;margin-bottom: 10px;">
              <div class="card-header text-light" style="background-color: #313131">  
              <h1 class="text-center mt-2">Salahkoding</h1>
              </div>
              <div class="card-body text-light" style="background-color: #222">
              <!-- notifications -->
              <?php if($this->session->flashdata('gagal_login')) {?>
                <div class="alert alert-danger text-center" role="alert" style="width: 100%;"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('gagal_login'); ?></b><br></div>
              <?php } ?>
              <?php if($this->session->flashdata('sukses')) {?>
                <div class="alert alert-success text-center" role="alert" style="width: 100%;"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('sukses'); ?></b><br></div>
              <?php } ?>
              <!-- akhir notifications -->
                  <br>
                  
                      <div class="container">
                        <form action="<?php echo base_url(). 'home/do_upload' ?>" method="post" enctype="multipart/form-data">
                          <h4 class="display-5 text-center">Form Registrasi</h4>
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-sm" id="username" name="username" maxlength="25" placeholder="Username" required>
                          </div>
                          <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" maxlength="25" placeholder="E-mail" required>
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-sm" id="password" name="password" maxlength="25" placeholder="Password" required>
                          </div>
                          <div class="form-group">
                            <label for="nim">NIM Mahasiswa</label>
                            <input type="text" class="form-control form-control-sm" id="nim" name="nim" maxlength="14" placeholder="A11.20XX.XXXXX" required>
                          </div>
                          <div class="form-group">
                          <label for="kelamin">Jenis Kelamin</label>
                          <select class="form-control form-control-sm" name="kelamin">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          </div>
                          <br>
                          <div class="form-group">
                          <label for="foto">Foto (max 1mb)</label>
                          <br>
                          <input type="file" id="foto" name="foto">
                          </div>
                          <input type="hidden" value="Admin" name="level">
                          <button class="btn btn-success" value="upload" type="submit" name="upload" style="float: right;">Tambah</button>
                        </form>
                      </div>

                </form>
              </div>
              <div class="card-footer" style="background-color: #313131">
              </div>
            </div>
    <!-- akhir modal register admin -->

    <!-- awal modal update -->
    <div class="modal fade" id="updateAkun" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-light">
          <div class="modal-header">
            <h5 class="modal-title">Update Data</h5>
            <button class="close" type="button" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <form action="<?php echo base_url(). 'home/updateUser' ?>" method="post" enctype="multipart/form-data">
                <h4 class="display-5 text-center">Form Update Data</h4>
                <div class="form-group">
                  <label for="id">ID</label>
                  <input type="text" class="form-control form-control-sm" id="id" name="id" disabled value="<?php echo $id ?>">
                  <label for="username">Username</label>
                  <input type="hidden" value="<?php echo $id ?>" name="nomer">
                  <input type="text" class="form-control form-control-sm" id="username" name="username" maxlength="25" placeholder="Username" required value="<?php echo $nm ?>">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control form-control-sm" id="email" name="email" maxlength="25" placeholder="E-mail" required value="<?php echo $email ?>">
                  <label for="password">Password</label>
                  <input type="text" class="form-control form-control-sm" id="password" name="password" maxlength="25" placeholder="Password" required value="<?php echo $pw;?>">
                  <label for="nim">NIM Mahasiswa</label>
                  <input type="text" class="form-control form-control-sm" id="nim" name="nim" maxlength="14" placeholder="A11.2017.10492" disabled value="<?php echo $nim;?>">
                </div>
                <label for="kelamin">Jenis Kelamin</label>
                 <input type="text" class="form-control form-control-sm" id="jenkel" name="jenkel" maxlength="14" disabled value="<?php echo $jenkel ?>">
                <br>
                <img src="<?php echo base_url()?>asset/img/user/<?php echo $ft ?>" width="100px" height="150px" alt="">
                <br>
                <label for="foto">Foto (max 1mb)</label>
                <br>
                <input type="file" id="foto" name="foto">
                <button class="btn btn-success" value="upload" type="submit" name="upload" style="float: right;">Update</button>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" type="reset">Tutup</button>
          </div>
        </div>
      </div> 
    </div>
    <!-- akhir modal update -->
</body>