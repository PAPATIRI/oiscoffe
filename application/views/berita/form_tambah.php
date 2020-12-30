<html>

<head>
    <title>Form Tambah Data Berita</title>
</head>

<body>
    <div class="container text-center">
        <h1>Form Tambah Data Menu</h1>
        <hr>
        <!-- Menampilkan Error jika validasi tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open("berita/tambah"); ?>
        <table class="table table-dark" border="1" cellpadding="7">
            <tr>
                <td>Judul</td>
                <td><input class="form-control" type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td><textarea class="form-control" type="text" name="input_isi" value="<?php echo set_value('input_isi'); ?>"></textarea></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <div class="form-group">
                        <label for="name">Photo</label>
                        <input enctype="multipart/form-data" class=" form-control-file <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" type="file" name="gambar" />
                        <div class="invalid-feedback">
                            <?php echo form_error('gambar') ?>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- <tr>
                <td>Gambar</td>
                <td><input class="form-control" type="text" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
            </tr> -->
        </table>

        <hr>
        <input class="btn btn-success" type="submit" name="submit" value="Simpan">
        <a href="<?php echo base_url('berita'); ?>"><input class="btn btn-secondary" type="button" value="Batal"></a>
        <?php echo form_close(); ?>
    </div>
</body>

</html>