<body>
	<br>
	<br>
	<br>
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
	   	<h6 class="lead text-center">Masuk ke akun anda</h6>
	    <form action="<?php echo base_url(). 'home/cekLogin' ?>" method="post">
	    	<div class="form-grup">
	    		<label for="username" class="sm">Username</label>
	    		<input type="text" class="sm form-control" name="username" id="username" placeholder="Username" required="">
	    		<small id="emailHelp" class="form-text text-muted">Login Menggunakan Usename Anda</small>
	    	</div>
	    	<br>
	    	<div class="form-group">
	    		<label for="password" class="sm">Password</label>
	    		<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
	    	</div>
	    	<div class="form-check">
	    		<input type="radio" class="form-check-input" id="radio1" name="radio" value="User" disabled="">
	    		<label for="check1" class="from-chek-label">User</label>
	    	</div>
	    	<div class="form-check">
	    		<input type="radio" class="form-check-input" id="radio2" name="radio" value="Admin" disabled="">
	    		<label for="check2" class="from-chek-label" >Admin</label>
	    	</div>
	    	<button class="btn btn-success" name="submit" value="submit" id="submit" style="float: right;">Masuk ></button>
	    </form>
	  </div>
	  <div class="card-footer" style="background-color: #313131">
	    <a href="<?php echo base_url()?>" class="btn btn-danger">< Kembali</a>
	  </div>
	</div>

	 <!-- awal modal register -->
    <div class="modal fade" id="register" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-light">
          <div class="modal-header">
            <h5 class="modal-title">Registrasi</h5>
            <button class="close" type="button" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">

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
                <input type="hidden" value="User" name="level">
                <button class="btn btn-success" value="upload" type="submit" name="upload" style="float: right;">Registrasi</button>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" type="reset" style="float: left;">Tutup</button>
          </div>
        </div>
      </div> 
    </div>
    <!-- akhir modal register -->
</body>