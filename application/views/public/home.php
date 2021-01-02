<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('public/_partials/header.php') ?>

<body>

  <!-- navigation -->
  <?php $this->load->view('public/_partials/navbar.php') ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('assets/img/bgoiscoffe.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <img class="img-fluid" src="<?= base_url('assets/img/logotrans.png') ?>" alt="">
            <a type="button" href="#about" class="mt-5 btn btn-sm btn-light">lebih tahu tentang kami</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="my-5 py-5 carousel-section">
        <div class="quote-section">
          <div class=" overlay"></div>
          <h2>Selamat Datang di OIS COFFEE</h2>
          <p>Kami menyediakan berbagai macam kopi bagi kalangan pecinta kopi yang bertempat di Batam. OIS COFFEE didirikan oleh 2 orang anak muda yaitu Arya Mustakim yang biasa dipanggil Omeng dan Fariz Tesal yang biasa dipanggil AIS.</p>
        </div>
        <!-- carousel section -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/img/img1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/img2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/img3.jpeg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- carousel section end -->
      <!-- intro section -->
      <div class="my-5 py-5 intro-section">
        <h2 id="about">belum tahu kami ?</h2>
        <div class="row my-4 py-4 align-items-center">
          <div class="col-md-6 col-sm-12">
            <p>OIS COFFEE merupakan sebuah coffeeshop yang menyediakan berbagai macam kopi bagi kalangan pecinta kopi yang bertempat di Batam. OIS COFFEE didirikan oleh 2 orang anak muda yaitu Arya Mustakim yang biasa dipanggil Omeng dan Fariz Tesal yang biasa dipanggil AIS. Nama OIS COFFEE sendiri diambil dari singkatan 2 ownernya yaitu Omeng dan Ais.</p>
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="assets/img/img5.jpeg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- intro section end-->
      <!-- visi misi section -->
      <div class="my-5 py-5 visi-misi-section">
        <div class="row my-4 py-4 align-items-center">
          <div class="col-md-6 col-sm-12">
            <img src="assets/img/img4.jpeg" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 col-sm-12">
            <h3>visi</h3>
            <p>Visi dari OIS COFFEE adalah membuat tempat nongkrong atau wadah bagi anak muda dalam hal positif pastinya serta tempat ngopi bagi kalangan pecinta kopi di Batam khususnya wilayah daerah Bengkong.</p>
            <h3 class="pt-3">misi</h3>
            <p>Misi dari OIS COFFEE adalah menyediakan coffee yang berkualitas, menyediakan tempat yang nyaman untuk berkumpul, memotivasi karyawan dalam meraih mimpi dan memberikan pelayanan yang baik kepada pelanggan OIS COFFEE.</p>
          </div>
        </div>
      </div>
      <!-- visi misi section end -->
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6">
          <div class="my-3 mx-4">
            <h3>lokasi kami</h3>
            <p>Jl. Golden Prawn, Kios Golden City, Blok B 63 - 64, Bengkong, Batam, Kepulauan Riau.</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15956.07551307742!2d104.02744867623085!3d1.146995786613709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1609076945198!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>

      </div>


  </main>
  <footer>
    <!-- footer -->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <!-- Bootstrap core JavaScript -->
  </footer>
  <?php $this->load->view('public/_partials/js.php') ?>
</body>

</html>