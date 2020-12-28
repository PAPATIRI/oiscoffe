<?php
// Cek role user
if ($this->session->userdata('role') == 'admin') { // Jika role-nya admin
?>

<?php
}
?>
<h2 style="margin-top: 0;margin-bottom: 0;">Menu OIS COFFEE</h2>
<div class="clearfix"></div>
<hr />
<div class="table-responsive">
    <a class="btn btn-primary" href='<?php echo base_url("berita/tambah"); ?>'>Tambah Data</a><br><br>
    <table class="table table-striped table-dark" border="1" cellpadding="7">
        <thead>
            <tr class="text-center">
                <th>N0</th>
                <th>Judul Berita</th>
                <th>Isi Berita</th>
                <th>Gambar</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        if (!empty($berita)) { // Jika data berita tidak sama dengan kosong, artinya jika data berita ada
            foreach ($berita as $data) {
                echo "<tr>
          <td class='text-center'>" . $no++ . "</td>
          <td>" . $data->judul . "</td>
          <td>" . $data->isi . "</td>
          <td>" . $data->gambar . "</td>
          <td><a class='btn btn-success' href='" . base_url("berita/ubah/" . $data->id) . "'>Ubah</a></td>
          <td><a class='btn btn-danger' href='" . base_url("berita/hapus/" . $data->id) . "'>Hapus</a></td>
          </tr>";
            }
        } else { // Jika data berita kosong
            echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
        }
        ?>
    </table>
</div>