<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TreveliingYuk.com</title>

  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?php echo base_url('assets/css/creative.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">TRAVELLINGYUK</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <a class="nav-link js-scroll-trigger"
            href="<?php echo base_url('page/uploadbukti'); ?>">UPLOAD BUKTI</a>
        </button>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">REGISTRASI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('laporanpdf'); ?>">CETAK TIKET</a>
            </li>
          <div class="nav-item">
           <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit"
            class="nav-link js-scroll-trigger"><i class="fa fa-sing-out"></i> LOGIN </a>
          </div>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class=" text-white font-weight-bold">Welcome to TRAVELLINGYUK.COM</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Liburan itu menyenangkan kawan !!!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?php echo base_url('page/pesantiket/'); ?>">Daftar</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Tentang TRAVELLINGYUK.COM</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Liburanyuk.com adalah sebuah aplikasi berbasis web dibidang jasa parwisata, di gunakan untuk melakukan perjalanan parawisata kepulauan seribu maka dibutuhkan suatu sistem yang baik. Mulai dari pemesanan tiket secara online, mengisi formulir pendaftaran tiket, dan sampai di lakukannya proses pembayaran. Dalam aplikasi berbasis web Liburanyuk.com ini juga dapat menampilkan informasi mengenai destinasi pulau – pulau yang berada dikepulauan seribu, mengakses menu-menu yang ada di website Liburanyuk.com, dan melakukan registrasi user untuk melakukan pendaftaran perjalanan wisata ke pulau seribu.</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>Yang kami tawarkan</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-3">
      <img src="<?php echo base_url('assets/img/portfolio/fullsize/1.jpg'); ?>"width="250" height="200" alt="">
      <h4>Paket Pulau Pari</h4>
      <p>
        <ul>
          <li>2/1 Malam = Rp300.000</li>
          <li>3/2 Malam = Rp500.000</li>
          <li>Kuota Max = 5 orang</li>
           <h4>FASILITAS</h4>
          </ul>
               </p> 
           <p>
        <ul>
          <li>KAPAL MOTOR PP</li>
          <li>WELCOME DRINK</li>
          <li>MAKAN SIANG</li>
          <li>BANANA BOAT</li>
          <li>SNORKLING</li>
          <li>PENGINAPAN</li>
          <li>FOTO UNDER WATER</li>
          <li>MAKAN MALAM</li>
        </ul>
              </p>
        </ul>
      </p>
        </ul>
      </p>
      <center><a href="<?php echo base_url('page/pesantiket/'); ?>"
      class="btn btn-info">Pesan</a></center>
    </div>
    
    <div class="col-sm-3">
      <img src="<?php echo base_url('assets/img/portfolio/fullsize/3.jpg'); ?>"width="250" height="200" alt="">
      <h4>Paket Pulau Tidung</h4>
      <p>
        <ul>
          <li>2/1 Malam = Rp350.000</li>
          <li>3/2 Malam = Rp400.000</li>
          <li>Kuota Max = 5 orang</li>
          <h4>FASILITAS</h4>
          </ul>
               </p> 
           <p>
        <ul>
          <li>KAPAL MOTOR PP</li>
          <li>WELCOME DRINK</li>
          <li>MAKAN SIANG</li>
          <li>BANANA BOAT</li>
          <li>SNORKLING</li>
          <li>PENGINAPAN</li>
          <li>FOTO UNDER WATER</li>
          <li>MAKAN MALAM</li>
        </ul>
              </p>
        </ul>
      </p>
      <center><a href="<?php echo base_url('page/pesantiket/'); ?>"
      class="btn btn-info">Pesan</a></center>
    </div>
    <div class="col-sm-3">
      <img src="<?php echo base_url('assets/img/portfolio/fullsize/4.jpg'); ?>" width="250" height="200" alt="">
      <h4>Paket Pulau Pramuka</h4>
      <p>
        <ul>
          <li>2/1 Malam = Rp370.000</li>
          <li>3/2 Malam = Rp430.000</li>
          <li>Kuota Max = 5 orang</li>
          <h4>FASILITAS</h4>
          </ul>
               </p> 
           <p>
        <ul>
          <li>KAPAL MOTOR PP</li>
          <li>WELCOME DRINK</li>
          <li>MAKAN SIANG</li>
          <li>BANANA BOAT</li>
          <li>SNORKLING</li>
          <li>PENGINAPAN</li>
          <li>FOTO UNDER WATER</li>
          <li>MAKAN MALAM</li>
        </ul>
              </p>
        </ul>
      </p>
        </ul>
      </p>
      <center><a href="<?php echo base_url('page/pesantiket/'); ?>"
      class="btn btn-info">Pesan</a></center>
    </div>
    <div class="col-sm-3">
      <img src="<?php echo base_url('assets/img/portfolio/fullsize/6.jpg'); ?>" width="250" height="200" alt="">
      <h4>Paket Pulau Semut</h4>
      <p>
         <ul>
          <li>2/1 Malam = Rp400.000</li>
          <li>3/2 Malam = Rp450.000</li>
          <li>Kuota Max = 5 orang</li>
           <h4>FASILITAS</h4>
          </ul>
               </p> 
           <p>
        <ul>
          <li>KAPAL MOTOR PP</li>
          <li>WELCOME DRINK</li>
          <li>MAKAN SIANG</li>
          <li>BANANA BOAT</li>
          <li>SNORKLING</li>
          <li>PENGINAPAN</li>
          <li>FOTO UNDER WATER</li>
          <li>MAKAN MALAM</li>
        </ul>
              </p>
        </ul>
      </p>
        </ul>
      </p>
        </ul>
      </p>
     <center><a href="<?php echo base_url('page/pesantiket/'); ?>"
      class="btn btn-info">Pesan</a></center>
    </div>
  </div>
  <br><br>
  
</div>

  <!-- Call to Action Section -->
 
  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">CONTACT!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Kontak kami dan kami akan merespon anda dalam 24 jam.!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Jakarta, Indonesia</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+62 81282190550</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="">TreveliingYuk.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright TreveliingYuk.com 2019</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url('assets/js/creative.min.js'); ?>"></script>

</body>

</html>