<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('public/_partials/header.php');
        $this->load->view('public/_partials/navbar.php');
        $this->load->view('public/galeri');
        $this->load->view('public/_partials/footer.php');
        $this->load->view('public/_partials/js.php');
    }
}
