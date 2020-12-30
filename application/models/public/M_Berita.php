<?php
class M_Berita extends CI_Model
{
    function tampil_berita()
    {
        return $this->db->get('berita');
    }
}
