<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Informatika - Universitas Bengkulu</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets1/img/unib.png" >
  <link href="<?= base_url() ?>assets1/img/unib1.png" >

  <!-- Google Fonts -->
  <link href="<?= base_url() ?>assets1/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url() ?>assets1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url() ?>assets1/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets1/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets1/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets1/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets1/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url() ?>assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><img src="<?php echo base_url('assets1/img/informatika1.png') ?>"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Informasi</a></li>
          <li><a href="#clients">Kerjasama</a></li>
          <li><a href="#team">Struktur</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="<?php echo base_url('assets1/img/intro-carousel/slider1.jpg') ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Laboratorium Pemograman</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets1/img/intro-carousel/slider2.jpg') ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Laboratorium Cerdas</h2>
                <!-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> 
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets1/img/intro-carousel/slider3.jpg') ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Laboratorium Citra</h2>
                <!-- <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> 
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets1/img/intro-carousel/slider4.png') ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Laboratorium Jaringan</h2>
               <!-- <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p> 
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="<?php echo base_url('assets1/img/intro-carousel/slider5.png') ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Laboratorium Multimedia</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Selamat Datang</a></h4>
            <p class="description">Selamat Datang di Website Laboratorium Informatika Universitas Bengkulu</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Kegiatan Praktikum</a></h4>
            <p class="description">Kegiatan Praktikum di Program Studi Informatika dilakukan setiap semesternya.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Asisten Dosen</a></h4>
            <p class="description">Kegiatan praktikum dipimpin oleh mahasiswa yang lolos melalui proses seleksi yang dilakukan oleh Asisten Laboratorium.</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tentang</h3>
          <p><?php foreach($tentang as $ttg) : ?>

                <?php echo word_limiter($ttg->sejarah,25)  ?>
                <?php endforeach; ?></p>
          
          <style type="text/css">
            #my_centered_buttons { display: flex; justify-content: center; }
          </style>
          <div id="my_centered_buttons">
          <button type="button" class="btn btn-success center-block" data-toggle="modal" data-target="#exampleModal" >
              Selengkapnya...
          </button>
          </div><br><br>
        </header>


          <!-- Modal -->

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url('assets1/img/about-mission.jpg') ?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-book-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Sejarah</a></h2>
              <p class="text-justify">
                <?php foreach($tentang as $ttg) : ?>

                <?php echo word_limiter($ttg->sejarah,25)  ?>
                <?php endforeach; ?>
              </p>
             
            </div>
          </div>



          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url('assets1/img/about-plan.jpg') ?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Visi</a></h2>
              <p>
                <?php foreach($tentang as $ttg) : ?>

                <?php echo word_limiter($ttg->visi,25)  ?>
                <?php endforeach; ?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo base_url('assets1/img/about-vision.jpg') ?>" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-copy-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misi</a></h2>
              <p>
                <?php foreach($tentang as $ttg) : ?>

                <?php echo word_limiter($ttg->misi,25)  ?>
                <?php endforeach; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Informasi</h3>
          <p>Silahkan Melihat Informasi-informasi Terbaru Tentang Laboratorium Teknik Informatika Universitas Bengkulu</p>
        </header>

        <div class="row m-5">
  <?php foreach($informasi as $info) : ?>

  <div class="card text-center m-4" style="width: 18rem;">
    <span class="display-2 text-center text-success "><i class="<?php echo $info->icon ?>"></i></span>
  <div class="card-body">
    <h5 class="card-title badge badge-success"><?php echo $info->judul_informasi ?></h5>
    <p class="card-text"><?php echo word_limiter($info->isi_informasi,25) ?></p>
    <button type="button" class="btn btn-sm btn-success  " data-toggle="modal" data-target="#exampleModal1">
      Selengkapnya...
    </button>
  </div>
</div>
<?php endforeach; ?>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify">
        <?php foreach($informasi as $info) : ?>
        <strong> <?php echo $info->judul_informasi  ?></strong>
        <?php endforeach; ?><br>
        <?php foreach($informasi as $info) : ?>
          <?php echo $info->isi_informasi  ?>
        <?php endforeach; ?><br> <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify">
         <strong>SEJARAH LABORATORIUM INFORMATIKA</strong><br>
        <?php foreach($tentang as $ttg) : ?>
          <?php echo $ttg->sejarah  ?>
        <?php endforeach; ?><br> <br>
        <strong>VISI</strong><br>
        <?php foreach($tentang as $ttg) : ?>
          <?php echo $ttg->visi  ?>
        <?php endforeach; ?><br><br>
        <strong>MISI</strong><br>
        <?php foreach($tentang as $ttg) : ?>
          <?php echo $ttg->misi  ?>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>



      </div>
    </section><!-- #services -->


    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Kerjasama</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <?php foreach($kerjasama as $kjs) : ?>
            <img src="<?php echo base_url('assets1/img/clients/'.$kjs->photo) ?>">
          <?php endforeach; ?>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Tim</h3>
          <p>Struktur Laboratorium Informatika Universitas Bengkulu</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <!--<div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>-->
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="<?php echo base_url('assets1/img/desi.jpg') ?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Desi Andreswari, S.T., M.Cs.</h4>
                  <span>Kepala Laboratorium</span>
                  <div class="social">
 
                    <a href="https://www.facebook.com/dezieandrez"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/desiandreswari/?hl=id"><i class="fa fa-instagram"></i></a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="<?php echo base_url('assets1/img/pakhenn.jpg') ?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Asisten Laboratorium</h4>
                  <span>Hendri Z, S.Kom</span>
                  <div class="social">
                    <a href="https://www.facebook.com/hendri.hen.12/"><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <!--<div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>-->
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Hubungi Kami</h3>
          <p>Jika memiliki pertanyaan silahkan kebawah ini </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>
              
              <?php foreach($identitas as $id) :?>
                <?php echo $id->alamat  ?>
              <?php endforeach; ?>
            </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telepon</h3>
              <p><?php foreach($identitas as $id) :?>
                <?php echo $id->telepon  ?>
              <?php endforeach; ?></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p>
                <?php foreach($identitas as $id) :?>
                <a href="mailto:<?php echo $id->email  ?>">
                <?php echo $id->email  ?>
              <?php endforeach; ?></p></a></p>
            </div>
          </div>

        </div>

        <form method="post" action="<?php echo base_url('landing_page/kirim_pesan') ?>">
  
  <div class="row m-4">
    <div class="col-md-8">
      
      <?php echo $this->session->flashdata('pesan') ?>

      <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control">
        <?php echo form_error('nama','<div class="text-danger small">','</div>')?>
      </div>

      <div class="form-group">
        <label>EMAIL</label>
        <input type="text" name="email" class="form-control">
        <?php echo form_error('email','<div class="text-danger small">','</div>')?>
      </div>

      <div class="form-group">
        <label>PESAN</label>
        <textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
        <?php echo form_error('pesan','<div class="text-danger small">','</div>')?>
      </div>

      <button type="submit" class="btn btn-success">KIRIM</button>
    </div>

  </div>
</form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><img src="<?php echo base_url('assets1/img/informatika.png') ?>"></h3>
            <p class="text-justify">
              <?php foreach($tentang as $ttg) :?>
                <?php echo word_limiter($ttg->sejarah,25)  ?>
              <?php endforeach; ?>
                
              </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Beranda</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Tentang</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Informasi</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#clients">Kerjasama</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#team">Struktur</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              <?php foreach($identitas as $id) :?>
                <?php echo $id->alamat  ?>
              <br>
              <strong>Telepon:</strong>  <?php echo $id->telepon  ?><br>
              <strong>Email:</strong>  <?php echo $id->email  ?><br>
              <?php endforeach; ?>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Berita</h4>
            <p>Silahkan masukan email untuk berlangaanan</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Berlangganan">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TNI'17</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="#">Cipher</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url() ?>assets1/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/superfish/hoverIntent.js"></script>
  <script src="<?= base_url() ?>assets1/lib/superfish/superfish.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url() ?>assets1/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url() ?>assets1/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url() ?>assets1/js/main.js"></script>

</body>
</html>
