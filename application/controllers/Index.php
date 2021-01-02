<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/ModelIndex'); // Load ModelMenu ke controller ini
    }
    public function index()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('index');
        $this->load->view('template/footer');
    }
}
