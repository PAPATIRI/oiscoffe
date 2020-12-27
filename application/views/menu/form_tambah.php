<html>

<head>
    <title>Form Tambah Data Menu Ois Coffee</title>
</head>

<body>
    <div class="container text-center">
        <h1>Form Tambah Data Menu</h1>
        <hr>
        <!-- Menampilkan Error jika validasi tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open("menu/tambah"); ?>
        <table class="table table-dark" border="1" cellpadding="7">
            <tr>
                <td>Nama</td>
                <td>
                    <!-- <input class="form-control" type="hidden" name="input_id" value="<?php echo set_value('input_id'); ?>"> -->
                    <input class="form-control" type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input class="form-control" type="text" name="input_harga" value="<?php echo set_value('input_harga'); ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input class="form-control" type="text" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea class="form-control" name="input_deskripsi"><?php echo set_value('input_deskripsi'); ?></textarea></td>
            </tr>
        </table>

        <hr>
        <input class="btn btn-success" type="submit" name="submit" value="Simpan">
        <a href="<?php echo base_url('menu'); ?>"><input class="btn btn-secondary" type="button" value="Batal"></a>
        <?php echo form_close(); ?>
    </div>
</body>

</html>