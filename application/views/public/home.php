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
            <!-- <span class="subheading">Selamat Datang di</span> -->
            <img class="img-fluid" src="<?= base_url('assets/img/logotrans.png') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="m-5 py-5 quote-section">
        <div class=" overlay"></div>
        <h2>Selamat Datang di OIS COFFEE</h2>
        <p>Kami menyediakan berbagai macam kopi bagi kalangan pecinta kopi yang bertempat di Batam. OIS COFFEE didirikan oleh 2 orang anak muda yaitu Arya Mustakim yang biasa dipanggil Omeng dan Fariz Tesal yang biasa dipanggil AIS.</p>
      </div>

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

  </main>
  <footer>
    <!-- footer -->
    <?php $this->load->view('public/_partials/footer.php') ?>
    <!-- Bootstrap core JavaScript -->
  </footer>
  <?php $this->load->view('public/_partials/js.php') ?>
</body>

</html>