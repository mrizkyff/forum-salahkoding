<html>
	<header>
		<title><?php echo $judul;?></title>
	</header>
	<body style="margin-top: 70px;">
		<h1 class="text-center text-light">Halaman PAP Explore</h1>

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

	   <!-- awal tabel konten -->
	<div class="container md-5">
	<!-- button buat posting -->
	<a href="<?php echo base_url(). 'home/login' ?>" class="btn btn-success" style="float: right;">
  	Buat Posting
	</a>
	<!-- akhir button buat posting -->
	<br>
	<br>
	<!-- awal tabel -->
	<table class="table table-striped text-light">
		<?php foreach ($content as $konten): ?>
		<tr>
			<!-- awal card threads -->
			<div class="card bg-dark text-light">
			  <div class="card-header">
			    <ul class="nav nav-tabs card-header-tabs">
			      <li class="nav-item">
			        <a class="nav-link disabled bg-dark text-light" href="#"><?php echo $konten['kategori'] ?></a>
			      </li>
			    </ul>
			  </div>
			  <div class="card-body text-left">
			  	<div class="row">
				  <div class="col-sm-2">
					  	<font size="2">
					    <img src="<?php echo base_url() ?>asset/img/user/<?php echo $konten['gambar']; ?>" width="75px" height="100px" alt="">
					    <p class="card-text" style="line-height: 16px;">	User ID : <?php echo $konten['id'] ?>
					    <br>
					    						Joined : <?php echo $konten['joined'] ?>
						<br>
					    						Username : <?php echo $konten['author'] ?>
						<br>
					    						NIM : <?php echo $konten['nim'] ?>
						<br>
												Level : <?php echo $konten['level'] ?>
					    </p>
				  		</font>
				  </div>
				  <div class="col-sm-10 text-left">
				  	<p><?php echo $konten['deskripsi'] ?></p>
				  	<br>
				  	<div class="container">
				  		<?php 
				  			if($konten['code']){ ?>
				  				<div class="container" style="text-align: left;background-color: #292929">
								  	<code style="color: white; text-align: left; margin-left: auto; margin-right: auto; background-color: #292929;text-indent: -2em;" class="text-left">
								  		<pre style="color: white;">
								  			
								  		<?php echo $konten['code'] ?>
								  		</pre>
								  	</code>
				  				</div>
				  		<?php }
				  		  ?>
				  		  <!-- awal tombol download -->
		                  <a href="<?php echo base_url(). 'home/login' ?>" class="btn btn-secondary text-light" style="float: right;">Download Project</a>
		                  <!-- akhir tombol downloads -->
				  	</div>
				  </div>
				  <div class="col-sm-3">
				  	<!-- kosong -->
				  </div>
				  <!-- awal kotak komentar -->
				  <div class="col-sm-9">
				  	<!-- tampilan komentar -->
				  	<?php foreach ($comment as $komentar):  
				  		if($konten['id_konten'] == $komentar['to']){

				  		?>
				  	<div class="card bg-dark text-light">
					  <div class="card-header" style="background-color: #292929">
					    <ul class="nav nav-tabs card-header-tabs">
					      <li class="nav-item">
					        <a class="nav-link disabled bg-dark text-light" href="#">Membalas</a>
					      </li>
					    </ul>
					  </div>
					  <div class="card-body text-left" style="background-color: #313335">
					  	<div class="row">
						  <div class="col-sm-3">
							  	<font size="2">
							    <img src="<?php echo base_url() ?>asset/img/user/<?php echo $komentar['foto']; ?>" width="75px" height="100px" alt="">
							    <p class="card-text" style="line-height: 16px;">	User ID : <?php echo $komentar['userid'] ?>
							    <br>
							    						Joined : <?php echo $komentar['joined'] ?>
								<br>
							    						Username : <?php echo $komentar['from'] ?>
								<br>
							    						NIM : <?php echo $komentar['nim'] ?>
								<br>
														Level : <?php echo $komentar['level'] ?>
							    </p>
						  		</font>
						  </div>
						  <div class="col-sm-9 text-left">
						  	<p><?php echo $komentar['komentar'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="card-footer text-muted" style="background-color: #292929">
					    <p class="card-text text-light" style="font-size: 13px;background-color: #292929">Comment ID : <?php echo $komentar['id'] ?>   ||   Commented : <?php echo $komentar['tanggal'] ?> </p>
					  </div>
					</div>
					<br>
				  	<?php } endforeach; ?>
				  		
				  	<!-- akhir tampilan komentar -->
				  	<div class="card" style="background-color: #292929">
					  <div class="card-header" style="background-color: #292929">
					    Komentar
					  </div>
					  <div class="card-body" style="background-color: #313335">
				  		<a style="float: right;" type="submit" value="submit" id="submit" class="btn btn-primary" href="<?php echo base_url(). 'home/login' ?>">Komentari</a>
					  </div>
					</div>
				  </div>
				  <!-- akhir kotak komentar -->
				</div>
			  </div>
			  <div class="card-footer text-muted">
			    <p class="card-text text-light" style="font-size: 13px;">Post ID : <?php echo $konten['id_konten'] ?>   ||   Posted : <?php echo $konten['tanggal'] ?> </p>
			  </div>
			</div>
			<br>
			<!-- akhir card threads -->
		<?php endforeach; ?>
		</tr>
	</table>
	</div>
	<!-- akhir tabel -->
	<!-- akhir konten -->

	</body>
</html>