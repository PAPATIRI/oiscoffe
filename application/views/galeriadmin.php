<div class="container">

    <h2 style="margin-top: 0;margin-bottom: 0;">Artikel OIS COFFEE</h2>
    <div class="clearfix"></div>
    <hr />
    <div class="table-responsive">
        <a class="btn btn-primary" href='<?php echo base_url("galeriadmin/tambah"); ?>' data-toggle="modal" data-target="#exampleModalCenter">Tambah Data</a><br><br>
        <table class="table table-striped table-dark" border="1" cellpadding="7">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama Foto</th>
                    <th>Deskripsi Foto</th>
                    <th>File Gambar</th>
                    <th>Tag Foto</th>
                    <th colspan="3">Aksi</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            if (!empty($galeriadmin)) { // Jika data galeriadmin tidak sama dengan kosong, artinya jika data galeriadmin ada
                foreach ($galeriadmin as $data) { ?>
                    <tr>
                        <td class='text-center'><?= $no++ ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->deskripsi ?></td>
                        <td><?= $data->tag ?></td>
                        <td><img src="<?= base_url() ?>upload/<?= $data->foto ?>" alt="" width="70" height="70"></td>
                        <td onclick="javascript: return confirm('anda yakin ingin menghapus data ini ?')"><?= anchor("galeriadmin/hapus/" . $data->id, '<div class="btn btn-danger btn-sm">Hapus Data</div>') ?></td>
                        <td><?= anchor("galeriadmin/edit/" . $data->id, '<div class="btn btn-warning btn-sm">Edit Data</div>') ?></td>
                    </tr>
            <?php }
            } else { // Jika data galeriadmin kosong
                echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
            }
            ?>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('galeriadmin/tambah_aksi') ?>
                <div class="form-group">
                    <label for="">Nama Foto</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Foto</label>
                    <input type="text" name="deskripsi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Upload Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tag Foto</label>
                    <input type="text" name="tag" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
</div>