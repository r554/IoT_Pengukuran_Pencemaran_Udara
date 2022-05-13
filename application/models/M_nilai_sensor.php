<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_nilai_sensor extends CI_Model
{
    public function get_nilai_sensor()
    {
        $this->db->select('*');
        $this->db->from('nilai_sensor');
        $result = $this->db->get('tbl_admin')->result(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
}
