<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <h4 class="text-center mb-4"><strong>Detail Data Pegawai</strong></h4>
            <table class="table table-dark">
                <tr>
                    <th>Nama Pegawai: </th>
                    <td><?= $detail->nama ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir: </th>
                    <td><?= $detail->tgl_lhr ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin: </th>
                    <td><?= $detail->jk ?></td>
                </tr>
                <tr>
                    <th>Posisi: </th>
                    <td><?= $detail->posisi ?></td>
                </tr>
                <tr>
                    <th>Alamat: </th>
                    <td><?= $detail->alamat ?></td>
                </tr>
                <tr>
                    <th>No Handphone: </th>
                    <td><?= $detail->no_hp ?></td>
                </tr>
                <tr>
                    <th>Foto: </th>
                    <td>
                        <img src="<?= base_url() ?>upload/<?= $detail->foto ?>" alt="img" width="300">
                    </td>
                </tr>
            </table>
            <a href="<?= base_url('pegawai/index') ?>" class="btn btn-primary">Kembali</a>
        </section>
    </div>
</div>