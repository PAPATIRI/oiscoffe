<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// class Menu extends CI_Controller
class Berita extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/ModelBerita');
    }

    public function index()
    {
        $data['berita'] = $this->ModelBerita->tampil_data()->result();
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('berita', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('pegawai');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
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

        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'foto' => $foto,
        );

        $this->ModelBerita->input_data($data, 'berita');
        redirect('berita/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['berita'] = $this->ModelBerita->edit_data($where, 'berita')->result();

        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('berita/form_edit', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        // $foto = $this->input->post('foto');

        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            // 'foto' => $foto,
        );

        $where = array(
            'id' => $id,
        );

        $this->ModelBerita->update_data($where, $data, 'berita');
        redirect('berita/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->ModelBerita->hapus_data($where, 'berita');
        redirect('berita/index');
    }
    public function detail($id)
    {
        $detail = $this->ModelBerita->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('berita/detail', $data);
        $this->load->view('template/footer');
    }
}
