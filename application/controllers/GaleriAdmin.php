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
        $data['galeriadmin'] = $this->ModelGaleri->tampil_data()->result();
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('galeriadmin', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('galeriadmin');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';
            $config['max_size'] = 2000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "upload gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $tag = $this->input->post('tag');

        $data = array(
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
            'tag' => $tag,
        );

        $this->ModelGaleri->input_data($data, 'galeriadmin');
        redirect('galeriadmin/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['galeri'] = $this->ModelGaleri->edit_data($where, 'galeri')->result();

        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('galeriadmin/form_edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $tag = $this->input->post('tag');
        // $foto = $this->input->post('foto');

        $data = array(
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'tag' => $tag,
        );

        $where = array(
            'id' => $id,
        );

        $this->ModelGaleri->update_data($where, $data, 'galeri');
        redirect('galeriadmin/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->ModelGaleri->hapus_data($where, 'galeri');
        redirect('galeriadmin/index');
    }
    public function detail($id)
    {
        $detail = $this->ModelGaleri->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('berita/detail', $data);
        $this->load->view('template/footer');
    }
}
