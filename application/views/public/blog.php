<body style="background-image: url(assets/img/bgcoffee.jpg); object-fit:contain; background-repeat: repeat-y;">
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/bgoiscoffe.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <img class="img-fluid" src="<?= base_url('assets/img/logotrans.png') ?>" alt="">
                        <a type="button" href="#quad" class="mt-5 btn btn-sm btn-light">Artikel Terbaru Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row" id="quad">
            <?php
            if (!empty($berita)) {
                foreach ($berita as $b) { ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-custom" style="width: 18rem;">
                            <img src="<?= base_url() ?>upload/<?= $b->foto ?>" height="300" alt="" class=" card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $b->judul ?></h5>
                                <p class="card-text"><?= word_limiter($b->isi, 10) ?></p>
                                <a href="#" class="btn btn-blog">Selengkapnya</a>
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