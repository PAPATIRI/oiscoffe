<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($berita as $p) { ?>
                <?= form_open_multipart('berita/update') ?>
                <div class="form-group">
                    <label for="">Judul Artikel</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $p->id ?>">
                    <input type="text" class="form-control" name="judul" value="<?= $p->judul ?>">
                </div>
                <div class="form-group">
                    <label for="">Isi Artikel</label>
                    <input type="date" class="form-control" name="isi" value="<?= $p->isi ?>">
                </div>
                <div class="form-group">
                    <label for="">Upload Foto</label>
                    <input type="file" name="foto" class="form-control" value="<?= $p->foto ?>">
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <?= form_close() ?>
            <?php } ?>
        </section>
    </div>
</div>