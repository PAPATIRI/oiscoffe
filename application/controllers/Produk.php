<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('public/_partials/navbar.php');
        $this->load->view('public/produk');
        $this->load->view('public/_partials/footer.php');
    }
}
