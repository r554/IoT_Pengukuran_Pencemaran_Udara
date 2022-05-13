<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kriteria extends CI_Model
{
    public function get_kriteria()
    {
        $this->db->select('*');
        $this->db->from('tbl_kriteria');
        $result = $this->db->get()->result(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
}
