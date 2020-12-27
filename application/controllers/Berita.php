<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// class Menu extends CI_Controller
class Berita extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/ModelBerita'); // Load ModelBerita ke controller ini
    }

    public function index()
    {
        $data['berita'] = $this->ModelBerita->view();
        $this->render_backend('berita', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->ModelBerita->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->ModelBerita->save(); // Panggil fungsi save() yang ada di ModelBerita.php
                redirect('berita');
            }
        }

        $this->render_backend('berita/form_tambah');
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->ModelBerita->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->ModelBerita->edit($id); // Panggil fungsi edit() yang ada di ModelBerita.php
                redirect('berita');
            }
        }

        $data['berita'] = $this->ModelBerita->view_by($id);
        $this->render_backend('berita/form_ubah', $data);
    }

    public function hapus($id)
    {
        $this->ModelBerita->delete($id); // Panggil fungsi delete() yang ada di ModelBerita.php
        redirect('berita');
    }
}
