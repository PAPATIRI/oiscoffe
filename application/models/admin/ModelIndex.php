<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class ModelIndex extends CI_Model
{
    public function hitung_jumlah_berita()
    {
        $query = $this->db->query("SELECT * FROM berita");
        $total = $query->num_rows();
        return $total;
    }

    public function hitung_jumlah_menu()
    {
        $query = $this->db->query("SELECT * FROM menu");
        $total = $query->num_rows();
        return $total;
    }

    public function hitung_jumlah_foto()
    {
        $query = $this->db->query("SELECT * FROM galeri");
        $total = $query->num_rows();
        return $total;
    }

    public function hitung_jumlah_pegawai()
    {
        $query = $this->db->query("SELECT * FROM pegawai");
        $total = $query->num_rows();
        return $total;
    }
}
