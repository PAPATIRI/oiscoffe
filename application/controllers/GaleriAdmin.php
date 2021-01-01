<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// class Menu extends CI_Controller
class GaleriAdmin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/ModelGaleri'); // Load ModelGaleri ke controller ini
    }

    public function index()
    {
        $data['galeriadmin'] = $this->ModelGaleri->view();
        $this->render_backend('galeriadmin', $data);
    }

    public function tambah()
    {
        $data = array();
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->ModelGaleri->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $upload = $this->ModelGaleri->upload();
                if ($upload['result'] == 'success') {
                    $this->ModelGaleri->save(); // Panggil fungsi save() yang ada di ModelGaleri.php
                    redirect('galeriadmin');
                }
            }
        }

        $this->render_backend('galeriadmin/form_tambah', $data);
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->ModelGaleri->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->ModelGaleri->edit($id); // Panggil fungsi edit() yang ada di ModelGaleri.php
                redirect('galeriadmin');
            }
        }

        $data['galeriadmin'] = $this->ModelGaleri->view_by($id);
        $this->render_backend('galeriadmin/form_ubah', $data);
    }

    public function hapus($id)
    {
        $this->ModelGaleri->delete($id); // Panggil fungsi delete() yang ada di ModelGaleri.php
        redirect('galeriadmin');
    }
}
