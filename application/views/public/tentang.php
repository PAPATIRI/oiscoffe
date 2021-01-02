<body>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/bgoiscoffe.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <img class="img-fluid" src="<?= base_url('assets/img/logotrans.png') ?>" alt="">
                        <a type="button" href="#content" class="mt-5 btn btn-sm btn-light btn-custom">Mengenal kami lebih dalam</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container ">
        <div class="sejarah-section mb-4" id="content">
            <h1>Visi dan Misi</h1>
            <p>
                Visi dari OIS COFFEE adalah membuat tempat nongkrong atau wadah bagi anak muda dalam hal positif pastinya serta tempat ngopi bagi kalangan pecinta kopi di Batam khususnya wilayah daerah Bengkong.
            </p>
            <p>
                Misi dari OIS COFFEE adalah menyediakan coffee yang berkualitas, menyediakan tempat yang nyaman untuk berkumpul, memotivasi karyawan dalam meraih mimpi dan memberikan pelayanan yang baik kepada pelanggan OIS COFFEE.
            </p>
        </div>
        <div class="sejarah-section">
            <h1>sejarah</h1>
            <p>
                OIS COFFEE merupakan sebuah coffeeshop yang menyediakan berbagai macam kopi bagi kalangan pecinta kopi yang bertempat di Batam. OIS COFFEE didirikan oleh 2 orang anak muda yaitu Arya Mustakim yang biasa dipanggil Omeng dan Fariz Tesal yang biasa dipanggil AIS. Nama OIS COFFEE sendiri diambil dari singkatan 2 ownernya yaitu Omeng dan Ais.
            </p>
            <p>
                OIS COFFEE pertama kali beroperasi pada tanggal 24 November 2020 hingga saat ini. OIS COFFEE beralamat di Jl. Golden Prawn, Kios Golden City, Blok B 63 - 64, Bengkong, Batam, Kepulauan Riau. OIS COFFEE memiliki ruangan indoor dan outdoor yang cocok untuk menikmati kopi dan sebagai tempat hangout, tempat nyantai dan tempat nongkrong bagi pecinta kopi. OIS COFFEE menyediakan 2 jenis kopi nusantara yaitu biji kopi Robusta dari Tumanggung dan biji kopi Arabika dari Aceh Gayo. OIS COFFEE buka setiap hari mulai dari pukul 4 sore sampai dengan pukul 12 tengah malam.
            </p>
        </div>
        <div class="pegawai-section">
            <h3 class="text-center">Crew Kami</h3>
            <div class="row">
                <?php
                if (!empty($pegawai)) {
                    foreach ($pegawai as $b) { ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="card card-custom" style="width: 18rem;">
                                <img src="<?= base_url() ?>upload/<?= $b->foto ?>" height="300" alt="" class=" card-img-top" alt="...">
                                <div class="card-body ">
                                    <h5 class="card-title text-light"><?= $b->nama ?></h5>
                                    <p class="card-text text-light"><?= $b->posisi ?></p>
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