<body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/bgoiscoffe.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <img class="img-fluid" src="<?= base_url('assets/img/logotrans.png') ?>" alt="">
                        <a type="button" href="#content" class="mt-5 btn btn-sm btn-light btn-custom">Kumpulan Foto Ois Coffee</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container" id="content">
        <h1 class="text-center text-light mb-4">kumpulan foto kami</h1>
        <div class="img-fluid pb-5 mb-5">
            <div class="row">
                <?php
                if (!empty($galeri)) {
                    foreach ($galeri as $b) { ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card card-custom" style="width: 18rem;">
                                <img src="<?= base_url() ?>upload/<?= $b->foto ?>" height="300" alt="" class=" card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-light"><?= $b->nama ?></h5>
                                </div>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "<h3>data tidak tersedia</h3>";
                }
                ?>
            </div>
        </div>
    </div>
</body>