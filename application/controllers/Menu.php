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
        $data['menu'] = $this->ModelMenu->tampil_data()->result();
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('menu', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('menu');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $tag = $this->input->post('tag');
        // $foto = $_FILES['foto'];
        // if ($foto = '') {
        // } else {
        //     $config['upload_path'] = './upload';
        //     $config['allowed_types'] = 'jpg|png|gif|jpeg';
        //     $config['max_size'] = 2000;

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('foto')) {
        //         echo "upload gagal";
        //         die();
        //     } else {
        //         $foto = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'nama' => $nama,
            'harga' => $harga,
            'tag' => $tag,
        );

        $this->ModelMenu->input_data($data, 'menu');
        redirect('menu/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['menu'] = $this->ModelMenu->edit_data($where, 'menu')->result();

        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('menu/form_edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $tag = $this->input->post('tag');
        // $foto = $this->input->post('foto');

        $data = array(
            'nama' => $nama,
            'harga' => $harga,
            'tag' => $tag,
            // 'foto' => $foto,
        );

        $where = array(
            'id' => $id,
        );

        $this->ModelMenu->update_data($where, $data, 'menu');
        redirect('menu/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->ModelMenu->hapus_data($where, 'menu');
        redirect('menu/index');
    }
}
