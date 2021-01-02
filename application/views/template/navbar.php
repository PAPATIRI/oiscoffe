<div>

    <!--/.nav-collapse -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Ois Coffee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('index'); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('berita'); ?>">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('galeriadmin'); ?>">Geleri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('menu'); ?>">Menu Ois</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link btn btn-danger" href="<?php echo base_url('auth/logout'); ?>">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>