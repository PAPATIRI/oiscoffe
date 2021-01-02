<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('public/ModelData');
    }
    public function index()
    {
        $data['pegawai'] = $this->ModelData->tampil_pegawai()->result();
        $this->load->view('public/_partials/header.php');
        $this->load->view('public/_partials/navbar.php');
        $this->load->view('public/tentang', $data);
        $this->load->view('public/_partials/footer.php');
        $this->load->view('public/_partials/js.php');
    }
}
