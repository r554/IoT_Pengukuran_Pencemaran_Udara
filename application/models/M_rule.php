<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_rule extends CI_Model
{
    public function get_rule()
    {
        $this->db->select('*');
        $this->db->from('tbl_rule_fuzzy');
        $result = $this->db->get()->result(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
}
