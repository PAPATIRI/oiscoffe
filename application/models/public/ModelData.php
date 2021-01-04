<?php
class ModelData extends CI_Model
{
    function tampil_berita()
    {
        return $this->db->get('berita');
    }
    function tampil_galeri()
    {
        return $this->db->get('galeri');
    }
    function tampil_menu()
    {
        return $this->db->get('menu');
    }
    function tampil_menu_by_tag($tag)
    {
        if ($tag == 'coffee') {
            return $this->db->get_where('menu', array('tag' => 'coffee'));
        } else if ($tag == 'main & snack') {
            return $this->db->get_where('menu', array('tag' => 'main & snack'));
        } else if ($tag == 'non coffee') {
            return $this->db->get_where('menu', array('tag' => 'non coffee'));
        } else if ($tag == 'manual brew') {
            return $this->db->get_where('menu', array('tag' => 'manual brew'));
        } else {
            return 'data not available';
        }
    }
    function tampil_pegawai()
    {
        return $this->db->get('pegawai');
    }
}
