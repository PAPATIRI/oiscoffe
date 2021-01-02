<?php
class Pegawai extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ModelPegawai');
    }
    public function index()
    {
        $data['pegawai'] = $this->ModelPegawai->tampil_data()->result();
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('pegawai', $data);
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
        $nama = $this->input->post('nama');
        $tgl_lhr = $this->input->post('tgl_lhr');
        $jk = $this->input->post('jk');
        $posisi = $this->input->post('posisi');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $foto = $_FILES['foto'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './upload/pegawai';
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
            'nama' => $nama,
            'tgl_lhr' => $tgl_lhr,
            'jk' => $jk,
            'posisi' => $posisi,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'foto' => $foto,
        );

        $this->ModelPegawai->input_data($data, 'pegawai');
        //     $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">Data berhasil ditambahkan
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //       <span aria-hidden="true">&times;</span>
        //     </button>
        //   </div>');
        redirect('pegawai/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->ModelPegawai->hapus_data($where, 'pegawai');
        redirect('pegawai/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['pegawai'] = $this->ModelPegawai->edit_data($where, 'pegawai')->result();

        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('pegawai/form_edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $tgl_lhr = $this->input->post('tgl_lhr');
        $jk = $this->input->post('jk');
        $posisi = $this->input->post('posisi');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        // $foto = $this->input->post('foto');

        $data = array(
            'nama' => $nama,
            'tgl_lhr' => $tgl_lhr,
            'jk' => $jk,
            'posisi' => $posisi,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            // 'foto' => $foto,
        );

        $where = array(
            'id' => $id,
        );

        $this->ModelPegawai->update_data($where, $data, 'pegawai');
        redirect('pegawai/index');
    }

    public function detail($id)
    {
        $detail = $this->ModelPegawai->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('pegawai/detail', $data);
        $this->load->view('template/footer');
    }
}
