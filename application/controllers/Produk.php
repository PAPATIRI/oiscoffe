<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('public/ModelData');
    }
    public function index()
    {
        $data['menu'] = $this->ModelData->tampil_menu()->result();
        $this->load->view('public/_partials/header.php');
        $this->load->view('public/_partials/navbar.php');
        $this->load->view('public/produk', $data);
        $this->load->view('public/_partials/footer.php');
        $this->load->view('public/_partials/js.php');
    }
}
