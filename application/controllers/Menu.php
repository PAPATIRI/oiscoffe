<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// class Menu extends CI_Controller
class Menu extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/ModelMenu'); // Load ModelMenu ke controller ini
    }

    public function index()
    {
        $data['menu'] = $this->ModelMenu->view();
        $this->render_backend('menu', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->ModelMenu->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->ModelMenu->save(); // Panggil fungsi save() yang ada di ModelMenu.php
                redirect('menu');
            }
        }

        $this->render_backend('menu/form_tambah');
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->ModelMenu->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->ModelMenu->edit($id); // Panggil fungsi edit() yang ada di ModelMenu.php
                redirect('menu');
            }
        }

        $data['menu'] = $this->ModelMenu->view_by($id);
        $this->render_backend('menu/form_ubah', $data);
    }

    public function hapus($id)
    {
        $this->ModelMenu->delete($id); // Panggil fungsi delete() yang ada di ModelMenu.php
        redirect('menu');
    }
}
