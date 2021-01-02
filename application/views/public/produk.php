<body>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/bgoiscoffe.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <img class="img-fluid" src="<?= base_url('assets/img/logotrans.png') ?>" alt="">
                        <a type="button" href="#menu" class="mt-5 btn btn-sm btn-light btn-custom">Produk Ois Coffee</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <h1 class="text-light text-center mb-5" id="menu">produk kami</h1>
        <!-- card produk section -->
        <div class="row">
            <?php
            if (!empty($menu)) {
                foreach ($menu as $b) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom" style="width: 18rem;">
                            <img src="<?= base_url() ?>upload/<?= $b->foto ?>" height="300" alt="" class=" card-img-top" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title text-light"><?= $b->nama ?></h5>
                                <p class="card-text text-light"><?= word_limiter($b->deskripsi, 10) ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            } else {
                echo "<h3>data tidak tersedia</h3>";
            }
            ?>
        </div>
        <!-- card produk section end -->
    </div>

</body>