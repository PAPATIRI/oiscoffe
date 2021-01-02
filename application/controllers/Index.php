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
    public function tampil_jumlah_berita()
    {
        $data['total_berita'] = $this->ModelIndex->hitung_jumlah_berita();
        $this->load->view('index', $data);
    }
}
