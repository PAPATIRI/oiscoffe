<html>

<head>
    <title>Form Tambah Data Berita</title>
</head>

<body>
    <div class="container text-center">
        <h1>Form Tambah Berita</h1>
        <hr>
        <!-- Menampilkan Error jika validasi tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open("berita/tambah", array("enctype" => "multipart/form-data")); ?>
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
                        <input type="file" name="input_gambar" />
                        <div class="invalid-feedback">
                            <?php echo form_error('input_gambar') ?>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <hr>
        <input class="btn btn-success" type="submit" name="submit" value="Simpan">
        <a href="<?php echo base_url('berita'); ?>"><input class="btn btn-secondary" type="button" value="Batal"></a>
        <?php echo form_close(); ?>
    </div>
</body>

</html>