<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class ModelBerita extends CI_Model
{
    public function view()
    {
        return $this->db->get('berita')->result();
    }

    public function view_by($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('berita')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, NIS tidak harus divalidasi
        // Jadi NIS di validasi hanya ketika menambah data siswa saja
        if ($mode == "save")
            $this->form_validation->set_rules('input_judul', 'Judul', 'required|max_length[550]');
        $this->form_validation->set_rules('input_isi', 'Isi', 'required');
        $this->form_validation->set_rules('input_gambar', 'Gambar', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel siswa
    public function save()
    {
        $data = array(
            "judul" => $this->input->post('input_judul'),
            "isi" => $this->input->post('input_isi'),
            "gambar" => $this->input->post('input_gambar')
        );

        $this->db->insert('berita', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
    public function edit($id)
    {
        $data = array(
            "judul" => $this->input->post('input_judul'),
            "isi" => $this->input->post('input_isi'),
            "gambar" => $this->input->post('input_gambar')
        );

        $this->db->where('id', $id);
        $this->db->update('berita', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita'); // Untuk mengeksekusi perintah delete data
    }
}
