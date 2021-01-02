<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($menu as $p) { ?>
                <?= form_open_multipart('menu/update') ?>
                <div class="form-group">
                    <label for="">Nama Menu</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $p->id ?>">
                    <input type="text" class="form-control" name="nama" value="<?= $p->nama ?>">
                </div>
                <div class="form-group">
                    <label for="">Harga Menu</label>
                    <input type="text" class="form-control" name="harga" value="<?= $p->harga ?>">
                </div>
                <div class="form-group">
                    <label for="">Upload Foto Menu</label>
                    <input type="file" name="foto" class="form-control" value="<?= $p->foto ?>">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Menu</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $p->harga ?>">
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <?= form_close() ?>
            <?php } ?>
        </section>
    </div>
</div>