<html>

<head>
    <title>Form Ubah Data Foto Ois Coffee</title>
</head>

<body>
    <div class="container text-center">

        <h1>Form Ubah Data Foto</h1>
        <hr>
        <!-- Menampilkan Error jika validasi tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open("galeriadmin/ubah/" . $galeriadmin->id); ?>
        <table class="table table-dark" border="1" cellpadding="7">
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="input_nama" value="<?php echo set_value('input_nama', $galeriadmin->nama); ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi Foto</td>
                <td><input class="form-control" type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi', $galeriadmin->deskripsi); ?>"></td>
            </tr>
            <tr>
                <td>File Foto</td>
                <td><input class="form-control" type="text" name="input_gambar" value="<?php echo set_value('input_gambar', $galeriadmin->gambar); ?>"></td>
            </tr>
            <tr>
                <td>Tag Foto</td>
                <td><input class="form-control" type="text" name="input_tag" value="<?php echo set_value('input_tag', $galeriadmin->tag); ?>"></td>
            </tr>
        </table>

        <hr>
        <input class="btn btn-success" type="submit" name="submit" value="Ubah">
        <a href="<?php echo base_url('galeriadmin'); ?>"><input class="btn btn-secondary" type="button" value="Batal"></a>
        <?php echo form_close(); ?>
    </div>
</body>

</html>