<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class ModelIndex extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/ModelIndex'); // Load ModelMenu ke controller ini
    }
    public function hitung_jumlah_berita()
    {
        $query = $this->db->query("SELECT * FROM berita");
        $total = $query->num_rows();
        return $total;
    }
}
