<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Index extends MY_Controller
{
    public function index()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('index');
        $this->load->view('template/footer');
    }
}
