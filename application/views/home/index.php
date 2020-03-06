<?php 
      if (isset($_GET['message'])) {
        if($_GET['message']=="gagal_username"){
          echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Username Telah Digunakan!</b></div>';
        }
        else if($_GET['message']=='gagal_email'){
          echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>E-mail Telah Digunakan!</b></div>';
        }
        else if($_GET['message']=='gagal_nim'){
          echo '<div class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>NIM Telah Digunakan!</b></div>';
        }
        else if($_GET['message']=='registrasi_berhasil'){
          echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Registrasi Berhasil!</b></div>';
        }
      }
      if(isset($_GET['pesan'])){
        if($_GET['pesan']=='logout'){
          echo '<div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Anda telah logout.</b></div>';
        }
      }
    ?>
    
    <!-- cek data apakah ada yang sama -->
    <div id="notification" class="container" style="margin-left: -10px">
    <?php if($this->session->flashdata('sukses')) {?>
    <div class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('sukses'); ?></b><br></div>
    <?php } ?>
    <?php if($this->session->flashdata('gagal_username')){ ?>
    <div id="notification" class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('gagal_username'); ?> </b><br></div>
    <?php } ?>
    <?php if($this->session->flashdata('gagal_nim')) {?>
    <div id="notification" class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('gagal_nim'); ?> </b><br></div>
    <?php } ?>
    <?php if($this->session->flashdata('gagal_email')) {?>
    <div id="notification" class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('gagal_email'); ?> </b><br></div>
    <?php } ?>
    <?php if($this->session->flashdata('gagal')) {?>
    <div id="notification" class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('gagal_email'); ?> </b><br></div>
    <?php } ?>
    </div>
    <!-- ahir cek data -->


    <!-- Awal Jumbotron -->
    <div class="jumbotron text-center text-light">
      <br>
      <img src="<?php echo base_url() ?>asset/img/logo/C.png" alt="">
      <h1 class="display-4">Selamat Datang di Salahkoding!</h1>
      <p class="lead">Sebuah website untuk berdiskusi project kuliah pemrograman.</p>
      <h3>Dari Mahasiswa | Bagi Mahasiswa | Untuk Mahasiswa</h3>
      <br>      
      <!-- Tabel untuk tombol -->
    <table align="center" border="0" width="40%">
      <tr>
        <td>
          <!-- tombol 1-->
          <a href="<?php echo base_url(). 'home/pdp' ?>" class="btn btn-primary">PDP Project</a>
          <!-- akhir tombol1 -->
        </td>
        <td>
          <!-- tombol 2-->
          <a href="<?php echo base_url(). 'home/pap' ?>" class="btn btn-primary">PAP Project</a>
        <!-- akhir tombol2 -->
        </td>
        <td>
          <!-- tombol3 -->
          <a href="<?php echo base_url(). 'home/psda' ?>" class="btn btn-primary">PSDA Project</a>
          <!-- akhir tombol3 -->
        </td>
      </tr>
    </table>
    <!-- ahir tabel untuk tombol -->
    </div>
    <!-- akhir jumbotron -->
  
    <!-- bagian choice your class -->
    <section class="choice text-light" id="choice">
    <br>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center text-light display-5">Choice Your Class</h2>
            <hr color="#818181">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="text-center">PDP Project</h4>
            <p class="text-justify">Dasar Pemrograman is basic programming language using Codeblocks IDE for C language. PDP is an exercise to learn more about Dasar Pemrograman like Hello World, print, input data, looping, branching, base recursive and many more. PDP given every weeks from computer laboratory assistance.</p>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">PAP Project</h4>
            <p class="text-justify">Algoritma Pemrograman is an algoritmic learning that used in programming language, in this case using Codeblocks IDE and C language. PAP is an exercise to learn more about Algoritma Pemrograman like complex branching, structure, pointer, recursive and many more. PAP given every weeks from computer laboratory assistance.</p>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">PSDA Project</h4>
            <p class="text-justify">Struktur Data is an data structure learning from one of programs, in this case using Codeblocks IDE and language. PSDA is en exercise to learn more about data structure like stack, queue, linked list and etc. PSDA given every weeks from computer laboratory assistance.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir choice your class -->


    <!-- Contact US! -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
        <div class="col-sm-12">
          <br>
          <h2 class="text-center">Contact Us!</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form action="<?php echo base_url(). 'home/tambahkritik' ;?>" method="post" onsubmit="return validasi_form()">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" id="nama" placeholder="Nama" class="form-control" name="nama" maxlength="25">
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" class="form-control" placeholder="E-mail" name="email" maxlength="25">
            </div>
            <div class="form-group">
              <label for="telp">No. Telp</label>
              <input type="tel" id="telp" class="form-control" placeholder="No. Telp" name="telp" maxlength="14">
            </div>
            <div class="form-group">
              <label for="kritik">Kritik/Saran</label>
              <select class="form-control" name="kritik">
              <option value=""> --- Pilih Salah Satu --- </option>
              <option value="Kritik">Kritik</option>
              <option value="Saran">Saran</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
            <textarea rows="3" class="form-control" placeholder="Pesan" name="pesan" maxlength="100" id="pesan"></textarea>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" id="btn+reset" class="btn btn-light">Reset</button>
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#kritik_saran" style="float: right;">Show Kritik & Saran</button>
          </form>
        </div>
      </div>
      </div>
      <br>
    </section>
   


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



    <!-- Awal Modal Kritik-Saran -->
    <div class="modal fade" id="kritik_saran" role="dialog" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-light">Kritik-Saran Pengunjung</h4>
            <button class="close" type="button" data-dismiss="modal">
              <span class="text-light">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="container mt-5">
                  <table class="table table-striped table-dark" width="100%;">
                    <tr>
                      <th scope="col" style="width: 5%">#</th>
                        <th scope="col" style="width: 10%">Nama</th>
                        <th scope="col" style="width: 15%">Jenis</th>
                        <th scope="col" style="width: 20%">Pesan</th>
                        <th scope="col" style="width: 20%">Diposting</th>
                    </tr>
                    <?php  $no = 1;?>
                    <?php foreach ($kritik as $list):?> 
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $list['nama'] ?></td>
                        <td><?php echo $list['jenis']?></td>
                        <td><?php echo $list['pesan'] ?></td>
                        <td><?php echo $list['tanggal'] ?></td>
                      <?php endforeach;  ?>
                    </tr>
                  </table>
                </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal">Tutup</button>            
          </div>
        </div>
      </div>
    </div>
    <!-- ahir modal kritik-saran -->

     <!-- akhir contact US! -->