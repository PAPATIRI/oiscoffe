<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($pegawai as $p) { ?>
                <?= form_open_multipart('pegawai/update') ?>
                <div class="form-group">
                    <label for="">Nama Pegawai</label>
                    <input type="hidden" class="form-control" name="id" value="<?= $p->id ?>">
                    <input type="text" class="form-control" name="nama" value="<?= $p->nama ?>">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lhr" value="<?= $p->tgl_lhr ?>">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label></br>
                    <select name="jk" class="form-control" value="<?= $p->jk ?>">
                        <option>laki-laki</option>
                        <option>perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Posisi</label>
                    <input type="text" class="form-control" name="posisi" value="<?= $p->posisi ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $p->alamat ?>">
                </div>
                <div class="form-group">
                    <label for="">No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" value="<?= $p->no_hp ?>">
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