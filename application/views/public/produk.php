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
    <!-- table menu section -->
    <div class="container pt-5" id="menu">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-dark text-center">
                    <tr>
                        <th colspan="2">Coffee</th>
                    </tr>
                    <?php
                    foreach ($this->ModelData->tampil_menu_by_tag('coffee')->result() as $d) { ?>
                        <tr class="text-left">
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->harga; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-dark text-center">
                    <tr>
                        <th colspan="2">Main & snack</th>
                    </tr>
                    <?php
                    // $data['menu'] = $this->ModelData->tampil_menu_by_tag('main & snack')->result();
                    foreach ($this->ModelData->tampil_menu_by_tag('main & snack')->result() as $d) { ?>
                        <tr class="text-left">
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->harga; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-dark text-center">
                    <tr>
                        <th colspan="2">Non Coffee</th>
                    </tr>
                    <?php
                    foreach ($this->ModelData->tampil_menu_by_tag('non coffee')->result() as $d) { ?>
                        <tr class="text-left">
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->harga; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-dark text-center">
                    <tr>
                        <th colspan="2">Manual Brew</th>
                    </tr>
                    <?php
                    foreach ($this->ModelData->tampil_menu_by_tag('manual brew')->result() as $d) { ?>
                        <tr class="text-left">
                            <td><?= $d->nama; ?></td>
                            <td><?= $d->harga; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>