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
}
