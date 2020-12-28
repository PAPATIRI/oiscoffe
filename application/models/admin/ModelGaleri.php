<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class ModelGaleri extends CI_Model
{
    public function view()
    {
        return $this->db->get('galeri')->result();
    }

    public function view_by($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('galeri')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, NIS tidak harus divalidasi
        // Jadi NIS di validasi hanya ketika menambah data siswa saja
        if ($mode == "save")
            $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[250]');
        $this->form_validation->set_rules('input_deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('input_gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('input_tag', 'Tag', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel siswa
    public function save()
    {
        $data = array(
            "nama" => $this->input->post('input_nama'),
            "deskripsi" => $this->input->post('input_deskripsi'),
            "gambar" => $this->input->post('input_gambar'),
            "tag" => $this->input->post('input_tag')
        );

        $this->db->insert('galeri', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
    public function edit($id)
    {
        $data = array(
            "nama" => $this->input->post('input_nama'),
            "deskripsi" => $this->input->post('input_deskripsi'),
            "gambar" => $this->input->post('input_gambar'),
            "tag" => $this->input->post('input_tag')
        );

        $this->db->where('id', $id);
        $this->db->update('galeri', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri'); // Untuk mengeksekusi perintah delete data
    }
}
