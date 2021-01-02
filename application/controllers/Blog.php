<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('public/ModelData');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['berita'] = $this->ModelData->tampil_berita()->result();
        $this->load->view('public/_partials/header.php');
        $this->load->view('public/_partials/navbar.php');
        $this->load->view('public/blog', $data);
        $this->load->view('public/_partials/footer.php');
        $this->load->view('public/_partials/js.php');
    }
}
