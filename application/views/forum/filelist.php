<html>
	<head>
		<title><?php echo $judul; ?></title>
	</head>
	<body style="margin-top: 50px;">
		<h1 class="text-light text-center">File List</h1>
		<br>
		
		<!-- awal alert -->
		<?php if($this->session->flashdata('deleteFile')) {?>
	    <div id="notification" class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('deleteFile'); ?> </b><br></div>
	    <?php } ?>
		<!-- akhir alert -->

		<!-- Awal modal about -->
	    <div class="modal fade" id="about" tabindex="-1" role="dialog">
	      <div class="modal-dialog modal-dialog-scrollable" role="document">
	        <div class="modal-content text-light">
	          <div class="modal-header">
	            <h5 class="modal-title">About</h5>
	            <button class="close text-light" data-dismiss="modal" type="button">
	            <span>&times;</span>
	          </button>
	          </div>
	          <div class="modal-body text-justify">
	            Assalamualaikum Wr. Wb<br>Dengan terbentuknya website ini kami mengucapkan terimakasih yang sebesar-besarnya kepada pihak-pihak yang yang mendukung proses pembuatan website ini, yaitu:
	              <p class="lead">
	                <ol style="1">
	                  <li>Tuhan Yang Maha Esa karena telah melimpahkan rahmat hidayah dan juga rizki sehingga dapat terbentuk website ini.
	                  </li>
	                  <li>Dosen yang senantiasa memberikan arahan dan bimbingan kepada kami sehingga website ini dapat dibangun
	                  </li>
	                  <li>Orang tua kami yang selalu memberikan dukungan berupa moral maupun materi kepada kami semua.
	                  </li>
	                  <li>Teman-teman yang selalu memberikan motivasi dan semangat kepada kami untuk menyelesaikan website ini.
	                  </li>
	                  <li>dan pihak-pihak lain yang tidak dapat kami sebutkan satu-persatu.</li>
	                </ol>
	                Dan juga adapun alasan untuk membuat website ini adalah sebagai berikut:
	                <ol>
	                  <li>Menyelesaikan tugas besar mata kuliah Rekayasa Perangkat Lunak</li>
	                  <li>Menyelesaikan tugas besar mata kuliah Interaksi Manusia dan Komputer</li>
	                  <li>Sebagai tanggung-jawab atas Fakultas Ilmu Komputer</li>
	                </ol>
	              </p>
	            
	          </div>
	          <div class="modal-footer">
	            <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- akhir modal about -->

	<!-- awal konten -->
		<!-- awal tabel konten -->
			<table class="table table-striped text-light" style="width: 90%" align="center">
				<tr>
					<th class="text-center">NO</th>
					<th class="text-center">POST ID</th>
					<th colspan="3" class="text-center">FROM</th>
					<th class="text-center">FILE NAME</th>
					<th class="text-center">UPLOADED</th>
					<th class="text-center">EDIT</th>
				</tr>
				<?php 
				$no = 0;
				foreach ($project as $file):
				$no++;
				?>
				<?php 
					$null = 'NULL';
					if($file['file'] != $null){

				?>
				<tr>
					<td class="text-center"><?php echo $no ?></td>
					<td class="text-center"><?php echo $file['id_konten'] ?></td>
					<td class="text-center"><?php echo $file['id'] ?></td>
					<td class="text-center"><?php echo $file['author'] ?></td>
					<td class="text-center"><img src="<?php echo base_url() ?>asset/img/user/<?php echo $file['gambar'] ?>" alt="<?php $file['nim'] ?>" width="75px" height="100px"></td>
					<td class="text-center"><a href="<?php echo base_url() ?>asset/file/project/<?php echo $file['file'] ?>"><?php echo $file['file'] ?></a></td>
					<td class="text-center"><?php echo $file['tanggal'] ?></td>
					<td class="text-center"><a href="<?php echo base_url(). 'home/delFile' ?>?id=<?php echo $file['id_konten'] ?>&userid=<?php echo $id ?>" class="btn btn-danger">HAPUS</a></td>
				</tr>
				<?php
					}
				 ?>
				<?php endforeach; ?>
			</table>
		<!-- akhir tabel -->
	<!-- akhir konten -->
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
</html>