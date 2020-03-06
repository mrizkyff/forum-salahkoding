
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">

    <title><?php echo $judul; ?></title>
  </head>
  <body>



    



    <!-- Awal Navigation Bar -->
      <center>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <center>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url()?>">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#about" data-toggle="modal">About</a>
            </li>
            </li>
            <li>
              <!-- tangkap data variabel -->
              <a href="<?php echo base_url(). 'home/mypost' ?>?id=<?php echo $id ?>" class="nav-link active">Posting Saya</a>
              <!-- ahir tangkap data variabel -->
            </li>
            <li>
              <a href="<?php echo base_url(). 'home/backtoExplore' ?>?id=<?php echo $id ?>" class="nav-link active">Explore</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Akun
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="nav-link dropdown-item text-dark" href="<?php echo base_url()?>?pesan=logout">Logout</a>
                <a href="#updateAkun" data-toggle="modal" class="nav-link dropdown-item text-dark">Profile</a>
              </div>
          </ul>
        </center>
        </div>
      </nav>
    </center>
    <!-- Akhir Navigation Bar -->
   