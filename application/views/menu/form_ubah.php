<html>

<head>
    <title>Form Ubah Data Menu Ois Coffee</title>
</head>

<body>
    <div class="container text-center">

        <h1>Form Ubah Data Menu</h1>
        <hr>
        <!-- Menampilkan Error jika validasi tidak valid -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open("menu/ubah/" . $menu->id); ?>
        <table class="table table-dark" border="1" cellpadding="7">
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="input_nama" value="<?php echo set_value('input_nama', $menu->nama); ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input class="form-control" type="text" name="input_harga" value="<?php echo set_value('input_harga', $menu->harga); ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input class="form-control" type="text" name="input_gambar" value="<?php echo set_value('input_gambar', $menu->gambar); ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea class="form-control" name="input_deskripsi"><?php echo set_value('input_deskripsi', $menu->deskripsi); ?></textarea></td>
            </tr>
        </table>

        <hr>
        <input class="btn btn-success" type="submit" name="submit" value="Ubah">
        <a href="<?php echo base_url('menu'); ?>"><input class="btn btn-secondary" type="button" value="Batal"></a>
        <?php echo form_close(); ?>
    </div>
</body>

</html>