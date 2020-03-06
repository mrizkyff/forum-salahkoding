<html>
<head>
  <title><?php echo $judul; ?></title>
</head>
<body>
  
  <br>
  <br>
  <br>
  <!-- awal alert -->
    <?php if($this->session->flashdata('gagal')) {?>
    <div id="notification" class="alert alert-danger text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('gagal'); ?> </b><br></div>
    <?php } ?>
    <?php if($this->session->flashdata('berhasil')) {?>
    <div id="notification" class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('berhasil'); ?> </b><br></div>
    <?php } ?>
    <!-- notifikasi hapus komentar -->
            <?php if($this->session->flashdata('deleteComment')) {?>
            <div id="notification" class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('deleteComment'); ?> </b><br></div>
            <?php } ?>
    <!-- akhir notifikasi hapus komentar -->
    <!-- notifikasi hapus konten -->
            <?php if($this->session->flashdata('delete')) {?>
            <div id="notification" class="alert alert-success text-center" role="alert" style="position: absolute;top: 55px;width: 100%"><b> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('delete'); ?> </b><br></div>
            <?php } ?>
    <!-- akhir notifikasi hapus konten -->
  <!-- akhir alert -->
  <h3 class="text-light text-center">Selamat Datang!, <?php echo $nm; ?> Sebagai <?php echo $level;?></h3>
  <h2 class="text-center text-light">Explore Salahkoding</h2>
  <br>
  <br>
  <!-- awal tabel konten -->
  <div class="container md-5">
    
  <!-- awal collapse posting-->
<div class="accordion text-light" id="accordionExample">
  <div class="card bg-dark">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
          Post Artikel
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <!-- posting artikel -->
                <form action="<?php echo base_url(). 'home/addArtikel' ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group text-light">
                    <div class="input-group">
                      <!-- text area deskripsi -->
                      <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                      <input type="hidden" id="nim" name="nim" value="<?php echo $nim ?>">
                      <input type="hidden" id="nama" name="nama" value="<?php echo $nm ?>">
                      <input type="hidden" id="level" name="level" value="<?php echo $level ?>">
                      <input type="hidden" id="foto" name="foto" value="<?php echo $ft ?>">
                      <input type="hidden" id="pw" name="pw" value="<?php echo $pw ?>">
                      <input type="hidden" id="joined" name="joined" value="<?php echo $joined ?>">
                      <input type="hidden" id="email" name="email" value="<?php echo $email ?>">
                      <input type="hidden" id="jenkel" nama="jenkel" value="<?php echo $jenkel ?>">
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" id="deskripsi" cols="75" rows="7" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="code">Code</label>
                      <textarea name="code" id="code" cols="75" rows="20" class="form-control"></textarea>
                    </div>
                </div>
                  <!-- ahir text area deskripsi -->
                <br>
                  <!-- select option kategori -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Ketegori</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="kategori" required>
                    <option selected>Pilih...</option>
                    <option value="PDP-1">PDP-1</option>
                    <option value="PDP-2">PDP-2</option>
                    <option value="PDP-3">PDP-3</option>
                    <option value="PDP-4">PDP-4</option>
                    <option value="PDP-5">PDP-5</option>
                    <option value="PDP-6">PDP-6</option>
                    <option value="PDP-7">PDP-7</option>
                    <option value="PDP-8">PDP-8</option>
                    <option value="PDP-9">PDP-9</option>
                    <option value="PDP-10">PDP-10</option>
                    <option value="PDP-11">PDP-11</option>
                    <option value="PDP-12">PDP-12</option>
                    <option value="PDP-13">PDP-13</option>
                    <option value="PDP-14">PDP-14</option>
                    <option value="PAP-1">PAP-1</option>
                    <option value="PAP-2">PAP-2</option>
                    <option value="PAP-3">PAP-3</option>
                    <option value="PAP-4">PAP-4</option>
                    <option value="PAP-5">PAP-5</option>
                    <option value="PAP-6">PAP-6</option>
                    <option value="PAP-7">PAP-7</option>
                    <option value="PAP-8">PAP-8</option>
                    <option value="PAP-9">PAP-9</option>
                    <option value="PAP-10">PAP-10</option>
                    <option value="PAP-11">PAP-11</option>
                    <option value="PAP-12">PAP-12</option>
                    <option value="PAP-13">PAP-13</option>
                    <option value="PAP-14">PAP-14</option>
                    <option value="PSDA-1">PSDA-1</option>
                    <option value="PSDA-2">PSDA-2</option>
                    <option value="PSDA-3">PSDA-3</option>
                    <option value="PSDA-4">PSDA-4</option>
                    <option value="PSDA-5">PSDA-5</option>
                    <option value="PSDA-6">PSDA-6</option>
                    <option value="PSDA-7">PSDA-7</option>
                    <option value="PSDA-8">PSDA-8</option>
                    <option value="PSDA-9">PSDA-9</option>
                    <option value="PSDA-10">PSDA-10</option>
                    <option value="PSDA-11">PSDA-11</option>
                    <option value="PSDA-12">PSDA-12</option>
                    <option value="PSDA-13">PSDA-13</option>
                    <option value="PSDA-14">PSDA-14</option>
                  </select>
                </div>
                  <!-- ahir select option kategori -->
                  <!-- upload file -->
                  <!-- akhir upload file -->

                  </div>
                  <button class="btn btn-success" type="submit" value="upload" name="upload">Post!</button>
                </form>
        <!-- akhir posting artikel -->

      </div>
    </div>
  </div>
  <div class="card bg-dark">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration: none;">
          Post Project
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          <!-- posting project -->
                <form action="<?php echo base_url(). 'posting/do_upload' ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group text-light">
                    <div class="input-group">
                      <!-- text area deskripsi -->
                      <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                      <input type="hidden" id="nim" name="nim" value="<?php echo $nim ?>">
                      <input type="hidden" id="nama" name="nama" value="<?php echo $nm ?>">
                      <input type="hidden" id="level" name="level" value="<?php echo $level ?>">
                      <input type="hidden" id="foto" name="foto" value="<?php echo $ft ?>">
                      <input type="hidden" id="pw" name="pw" value="<?php echo $pw ?>">
                      <input type="hidden" id="joined" name="joined" value="<?php echo $joined ?>">
                      <input type="hidden" id="email" name="email" value="<?php echo $email ?>">
                      <input type="hidden" id="jenkel" nama="jenkel" value="<?php echo $jenkel ?>">
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" id="deskripsi" cols="75" rows="7" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="code">Code</label>
                      <textarea name="code" id="code" cols="75" rows="20" class="form-control"></textarea>
                    </div>
                </div>
                  <!-- ahir text area deskripsi -->
                <br>
                  <!-- select option kategori -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Ketegori</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="kategori" required>
                    <option selected>Pilih...</option>
                    <option value="PDP-1">PDP-1</option>
                    <option value="PDP-2">PDP-2</option>
                    <option value="PDP-3">PDP-3</option>
                    <option value="PDP-4">PDP-4</option>
                    <option value="PDP-5">PDP-5</option>
                    <option value="PDP-6">PDP-6</option>
                    <option value="PDP-7">PDP-7</option>
                    <option value="PDP-8">PDP-8</option>
                    <option value="PDP-9">PDP-9</option>
                    <option value="PDP-10">PDP-10</option>
                    <option value="PDP-11">PDP-11</option>
                    <option value="PDP-12">PDP-12</option>
                    <option value="PDP-13">PDP-13</option>
                    <option value="PDP-14">PDP-14</option>
                    <option value="PAP-1">PAP-1</option>
                    <option value="PAP-2">PAP-2</option>
                    <option value="PAP-3">PAP-3</option>
                    <option value="PAP-4">PAP-4</option>
                    <option value="PAP-5">PAP-5</option>
                    <option value="PAP-6">PAP-6</option>
                    <option value="PAP-7">PAP-7</option>
                    <option value="PAP-8">PAP-8</option>
                    <option value="PAP-9">PAP-9</option>
                    <option value="PAP-10">PAP-10</option>
                    <option value="PAP-11">PAP-11</option>
                    <option value="PAP-12">PAP-12</option>
                    <option value="PAP-13">PAP-13</option>
                    <option value="PAP-14">PAP-14</option>
                    <option value="PSDA-1">PSDA-1</option>
                    <option value="PSDA-2">PSDA-2</option>
                    <option value="PSDA-3">PSDA-3</option>
                    <option value="PSDA-4">PSDA-4</option>
                    <option value="PSDA-5">PSDA-5</option>
                    <option value="PSDA-6">PSDA-6</option>
                    <option value="PSDA-7">PSDA-7</option>
                    <option value="PSDA-8">PSDA-8</option>
                    <option value="PSDA-9">PSDA-9</option>
                    <option value="PSDA-10">PSDA-10</option>
                    <option value="PSDA-11">PSDA-11</option>
                    <option value="PSDA-12">PSDA-12</option>
                    <option value="PSDA-13">PSDA-13</option>
                    <option value="PSDA-14">PSDA-14</option>
                  </select>
                </div>
                  <!-- ahir select option kategori -->
                  <!-- upload file -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload File</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="project">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                  </div>
                </div>
                  <!-- akhir upload file -->

                  </div>
                  <button class="btn btn-success" type="submit" value="upload" name="upload">Post!</button>
                </form>
        <!-- akhir posting project -->
      </div>
    </div>
  </div>
</div>
<!-- akhir collapse posting -->

  <br>
  <br>
  <!-- <table class="table table-striped text-light">
    <tr>
      <th>ID</th>
      <th>ID KONTEN</th>
      <th>Author</th>
      <th>NIM</th>
      <th>Gambar</th>
      <th>Deskripsi</th>
      <th>File</th>
      <th>Tanggal</th>
      <th>Rating</th>
      <th>Kategori</th>
    </tr>
    <?php foreach ($content as $konten):?>
    <tr>
      <td><?php echo $konten['id'] ?></td>
      <td><?php echo $konten['id_konten'] ?></td>
      <td><?php echo $konten['nim'] ?></td>
      <td><?php echo $konten['author']; ?></td>
      <td>
        <img src="<?php echo base_url() ?>asset/img/user/<?php echo $konten['gambar']; ?>" alt="" width="75px" height="100px">
      </td>
      <td><?php echo $konten['deskripsi']; ?></td>
      <td><a href="<?php echo base_url() ?>asset/file/project/<?php echo $konten['file']; ?>">Download File</a></td>
      <th><?php echo $konten['tanggal']; ?></th>
      <td><?php echo $konten['rating']; ?></td>
      <td><?php echo $konten['kategori']; ?></td>
    </tr>
    <?php endforeach;?>
  </table> -->
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
              <p class="card-text" style="line-height: 16px;">  User ID : <?php echo $konten['id'] ?>
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
                  <?php 
                        $project = 'NULL';
                        if($konten['file'] != $project){
                    ?>
                                <a href="<?php echo base_url() ?>asset/file/project/<?php echo $konten['file'] ?>" class="btn btn-secondary text-light" style="float: right;">Download Project</a>
                  <?php
                        }
                      ?>
                  <!-- akhir tombol downloads -->
            </div>
          </div>
          <br>
          <br>
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
                  <p class="card-text" style="line-height: 16px;">  User ID : <?php echo $komentar['userid'] ?>
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
                  <br>
                 

                  <a href="<?php echo base_url(). 'home/delComment' ?>?idComment=<?php echo $komentar['id'] ?>&id=<?php echo $id ?>" class="btn btn-danger">Hapus Komentar</a>
                  
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
            <form action="<?php echo base_url(). 'home/komentari'?>" method="post">
              <textarea name="komentar" id="komentar" class="form-control" rows="2" placeholder="Komentari ..." required></textarea>
              <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                <input type="hidden" id="nim" name="nim" value="<?php echo $nim ?>">
                <input type="hidden" id="nama" name="nama" value="<?php echo $nm ?>">
                <input type="hidden" id="level" name="level" value="<?php echo $level ?>">
                <input type="hidden" id="foto" name="foto" value="<?php echo $ft ?>">
                <input type="hidden" id="pw" name="pw" value="<?php echo $pw ?>">
                <input type="hidden" id="joined" name="joined" value="<?php echo $joined ?>">
                <input type="hidden" id="email" name="email" value="<?php echo $email ?>">
                <input type="hidden" id="jenkel" name="jenkel" value="<?php echo $jenkel ?>">
              <br>
              <input type="hidden" id="to" name="to" value="<?php echo $konten['id_konten']?>">
              <button style="float: right;" type="submit" value="submit" id="submit" class="btn btn-primary">Komentari</button>
            </form>
            </div>
          </div>
          </div>
          <!-- akhir kotak komentar -->
        </div>
        </div>
        <div class="card-footer text-muted">
          <p class="card-text text-light" style="font-size: 13px;">Post ID : <?php echo $konten['id_konten'] ?>   ||   Posted : <?php echo $konten['tanggal'] ?> 
       
            <a href="<?php echo base_url(). 'home/delPost' ?>?contentId=<?php echo $konten['id_konten'] ?>&id=<?php echo $id ?>" class="btn btn-danger" style="float: right;">Hapus Post</a>
      
        </p>
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

  <!-- modal posting -->
  <!-- Modal -->
  <div class="modal fade" id="modalposting" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-light">Buat Posting</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(). 'posting/do_upload' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group text-light">
              <div class="input-group">
                <!-- text area deskripsi -->
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                <input type="hidden" id="nim" name="nim" value="<?php echo $nim ?>">
                <input type="hidden" id="nama" name="nama" value="<?php echo $nm ?>">
                <input type="hidden" id="level" name="level" value="<?php echo $level ?>">
                <input type="hidden" id="foto" name="foto" value="<?php echo $ft ?>">
                <input type="hidden" id="pw" name="pw" value="<?php echo $pw ?>">
                <input type="hidden" id="joined" name="joined" value="<?php echo $joined ?>">
                <input type="hidden" id="email" name="email" value="<?php echo $email ?>">
                <input type="hidden" id="jenkel" nama="jenkel" value="<?php echo $jenkel ?>">
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" cols="75" rows="7" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="code">Code</label>
                <textarea name="code" id="code" cols="75" rows="20" class="form-control"></textarea>
              </div>
          </div>
            <!-- ahir text area deskripsi -->
          <br>
            <!-- select option kategori -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Ketegori</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="kategori" required>
              <option selected>Pilih...</option>
              <option value="PDP-1">PDP-1</option>
              <option value="PDP-2">PDP-2</option>
              <option value="PDP-3">PDP-3</option>
              <option value="PDP-4">PDP-4</option>
              <option value="PDP-5">PDP-5</option>
              <option value="PDP-6">PDP-6</option>
              <option value="PDP-7">PDP-7</option>
              <option value="PDP-8">PDP-8</option>
              <option value="PDP-9">PDP-9</option>
              <option value="PDP-10">PDP-10</option>
              <option value="PDP-11">PDP-11</option>
              <option value="PDP-12">PDP-12</option>
              <option value="PDP-13">PDP-13</option>
              <option value="PDP-14">PDP-14</option>
              <option value="PAP-1">PAP-1</option>
              <option value="PAP-2">PAP-2</option>
              <option value="PAP-3">PAP-3</option>
              <option value="PAP-4">PAP-4</option>
              <option value="PAP-5">PAP-5</option>
              <option value="PAP-6">PAP-6</option>
              <option value="PAP-7">PAP-7</option>
              <option value="PAP-8">PAP-8</option>
              <option value="PAP-9">PAP-9</option>
              <option value="PAP-10">PAP-10</option>
              <option value="PAP-11">PAP-11</option>
              <option value="PAP-12">PAP-12</option>
              <option value="PAP-13">PAP-13</option>
              <option value="PAP-14">PAP-14</option>
              <option value="PSDA-1">PSDA-1</option>
              <option value="PSDA-2">PSDA-2</option>
              <option value="PSDA-3">PSDA-3</option>
              <option value="PSDA-4">PSDA-4</option>
              <option value="PSDA-5">PSDA-5</option>
              <option value="PSDA-6">PSDA-6</option>
              <option value="PSDA-7">PSDA-7</option>
              <option value="PSDA-8">PSDA-8</option>
              <option value="PSDA-9">PSDA-9</option>
              <option value="PSDA-10">PSDA-10</option>
              <option value="PSDA-11">PSDA-11</option>
              <option value="PSDA-12">PSDA-12</option>
              <option value="PSDA-13">PSDA-13</option>
              <option value="PSDA-14">PSDA-14</option>
            </select>
          </div>
            <!-- ahir select option kategori -->
            <!-- upload file -->
          <div id="checkbox_foto">
            <input type="checkbox" id="ubah_foto" name="ubah_foto" value="true"> Ceklis jika ingin upload file
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload File</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="project">
              <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
            </div>
          </div>
            <!-- akhir upload file -->

            </div>
            <button class="btn btn-success" type="submit" value="upload" name="upload">Posting!</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir modal posting -->


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