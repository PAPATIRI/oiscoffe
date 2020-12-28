<?php
// Cek role user
if ($this->session->userdata('role') == 'admin') { // Jika role-nya admin
?>

<?php
}
?>
<h2 style="margin-top: 0;margin-bottom: 0;">Artikel OIS COFFEE</h2>
<div class="clearfix"></div>
<hr />
<div class="table-responsive">
    <a class="btn btn-primary" href='<?php echo base_url("galeriadmin/tambah"); ?>'>Tambah Data</a><br><br>
    <table class="table table-striped table-dark" border="1" cellpadding="7">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Foto</th>
                <th>Deskripsi Foto</th>
                <th>File Gambar</th>
                <th>Tag Foto</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        if (!empty($galeriadmin)) { // Jika data galeriadmin tidak sama dengan kosong, artinya jika data galeriadmin ada
            foreach ($galeriadmin as $data) {
                echo "<tr>
          <td class='text-center'>" . $no++ . "</td>
          <td>" . $data->nama . "</td>
          <td>" . $data->deskripsi . "</td>
          <td>" . $data->gambar . "</td>
          <td>" . $data->tag . "</td>
          <td><a class='btn btn-success' href='" . base_url("galeriadmin/ubah/" . $data->id) . "'>Ubah</a></td>
          <td><a class='btn btn-danger' href='" . base_url("galeriadmin/hapus/" . $data->id) . "'>Hapus</a></td>
          </tr>";
            }
        } else { // Jika data galeriadmin kosong
            echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
        }
        ?>
    </table>
</div>