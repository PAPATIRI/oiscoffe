<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <h4 class="text-center mb-4"><strong>Detail Data Artikel</strong></h4>
            <table class="table table-dark">
                <tr>
                    <th>Judul Artikel: </th>
                    <td><?= $detail->judul ?></td>
                </tr>
                <tr>
                    <th>Isi Artikel: </th>
                    <td><?= $detail->isi ?></td>
                </tr>
                <tr>
                    <th>Foto: </th>
                    <td>
                        <img src="<?= base_url() ?>upload/<?= $detail->foto ?>" alt="" width="70" height="70">
                    </td>
                </tr>
            </table>
            <a href="<?= base_url('berita/index') ?>" class="btn btn-primary">Kembali</a>
        </section>
    </div>
</div>