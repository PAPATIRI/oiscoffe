<body>
    <div class="berita-section" style="height: 100vh; margin-top: -100; padding-top:2em;padding-bottom:2em; background-image: url('assets/img/bgcoffee.jpg'); object-fit: cover;">
        <div class="container">
            <div class="row">
                <?php
                if (!empty($berita)) {
                    foreach ($berita as $b) { ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card card-custom" style="width: 18rem;">
                                <img src="<?php $b->gambar ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $b->judul ?></h5>
                                    <p class="card-text"><?= $b->isi ?></p>
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