<html>

<head>
    <title>Form Ubah Data Menu Ois Coffee</title>
</head>

<body>
    <div class="container text-center">

        <h1>Form Ubah Berita</h1>
        <hr>
        <!-- Menampilkan Error jika validasi tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open("berita/ubah/" . $berita->id); ?>
        <table class="table table-dark" border="1" cellpadding="7">
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="input_judul" value="<?php echo set_value('input_judul', $berita->judul); ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input class="form-control" type="text" name="input_isi" value="<?php echo set_value('input_isi', $berita->isi); ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input class="form-control" type="text" name="input_gambar" value="<?php echo set_value('input_gambar', $berita->gambar); ?>"></td>
            </tr>
        </table>

        <hr>
        <input class="btn btn-success" type="submit" name="submit" value="Ubah">
        <a href="<?php echo base_url('berita'); ?>"><input class="btn btn-secondary" type="button" value="Batal"></a>
        <?php echo form_close(); ?>
    </div>
</body>

</html>