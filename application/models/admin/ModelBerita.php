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
        if ($mode == "save")
            $this->form_validation->set_rules('input_judul', 'Judul', 'required|max_length[550]');
        $this->form_validation->set_rules('input_isi', 'Isi', 'required');
        $this->form_validation->set_rules('input_gambar', 'Gambar', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    public function upload()
    {
        $config['upload_path'] = './upload/berita';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '8000';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('input_gambar')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    // Fungsi untuk melakukan simpan data ke tabel siswa
    public function save($upload)
    {
        $data = array(
            "judul" => $this->input->post('input_judul'),
            "isi" => $this->input->post('input_isi'),
            "gambar" => $this->input->post('input_gambar'),
            'nama_file' => $upload['file']['file_name'],
            'ukuran_file' => $upload['file']['file_size'],
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

        // if (!empty($_FILES["gambar"]["name"])) {
        //     $this->gambar = $this->_uploadImage();
        // } else {
        //     $this->gambar = $post("old_image");
        // }

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
