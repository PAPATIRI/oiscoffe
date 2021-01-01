<div class="container">

    <h2 style="margin-top: 0;margin-bottom: 0;">Data Pegawai OIS COFFEE</h2>
    <div class="clearfix"></div>
    <hr />
    <div class="table-responsive">
        <!-- <?= $this->session->flashdata('message') ?> -->
        <a class="btn btn-primary" href='<?php echo base_url("pegawai/tambah"); ?>' data-toggle="modal" data-target="#exampleModalCenter">Tambah Data</a><br><br>
        <table class="table table-striped table-dark" border="1" cellpadding="7">
            <thead>
                <tr class="text-center">
                    <th>N0</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Posisi</th>
                    <!-- <th>Foto</th> -->
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            if (!empty($pegawai)) { // Jika data pegawai tidak sama dengan kosong, artinya jika data pegawai ada
                foreach ($pegawai as $data) { ?>
                    <tr>
                        <td class='text-center'><?= $no++ ?></td>
                        <td><?= $data->nama ?></td>
                        <td><?= $data->tgl_lhr ?></td>
                        <td><?= $data->jk ?></td>
                        <td><?= $data->posisi ?></td>
                        <td onclick="javascript: return confirm('anda yakin ingin menghapus data ini ?')"><?= anchor("pegawai/hapus/" . $data->id, '<div class="btn btn-danger btn-sm">Hapus Data</div>') ?></td>
                        <td><?= anchor("pegawai/edit/" . $data->id, '<div class="btn btn-warning btn-sm">Edit Data</div>') ?></td>
                        <td>
                            <?= anchor('pegawai/detail/' . $data->id, '<div class="btn btn-success btn-sm">Detail Data</div>') ?>
                        </td>

                    </tr>
            <?php }
            } else { // Jika data pegawai kosong
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
                <?= form_open_multipart('pegawai/tambah_aksi') ?>
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lhr" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label></br>
                    <select name="jk" class="form-control">
                        <option>laki-laki</option>
                        <option>perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Posisi</label>
                    <input type="text" name="posisi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">No Handphone</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Upload Foto</label>
                    <input type="file" name="foto" class="form-control">
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