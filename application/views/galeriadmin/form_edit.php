<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($galeri as $p) { ?>
                <?= form_open_multipart('galeriadmin/update') ?>
                <div class="form-group">
                    <label for="">Nama Foto</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $p->id ?>">
                    <input type="text" class="form-control" name="nama" value="<?= $p->nama ?>">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Foto</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $p->deskripsi ?>">
                </div>
                <div class="form-group">
                    <label for="">Upload Foto</label>
                    <input type="file" name="foto" class="form-control" value="<?= $p->foto ?>">
                </div>
                <div class="form-group">
                    <label for="">Tag Foto</label>
                    <input type="text" class="form-control" name="tag" value="<?= $p->tag ?>">
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <?= form_close() ?>
            <?php } ?>
        </section>
    </div>
</div>