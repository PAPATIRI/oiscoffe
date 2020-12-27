<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends MY_Controller
{
    public function home()
    {
        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('home'); // load view home.php
    }
    public function menu()
    {
        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('menu'); // load view berita.php
    }
    public function berita()
    {
        $this->render_backend('berita'); // load view berita.php
    }
    public function kontak()
    {
        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('kontak'); // load view kontak.php
    }
}
