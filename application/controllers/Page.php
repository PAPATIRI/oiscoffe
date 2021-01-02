<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends MY_Controller
{
    public function home()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('home');
        $this->load->view('template/footer');
    }
    public function menu()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('menu');
        $this->load->view('template/footer');
    }
    public function berita()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('berita');
        $this->load->view('template/footer');
    }
    public function galeri()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('galeriadmin');
        $this->load->view('template/footer');
    }
    public function pegawai()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('pegawai');
        $this->load->view('template/footer');
    }
}
