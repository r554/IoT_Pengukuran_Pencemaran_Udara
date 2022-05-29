<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function get_admin()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $result = $this->db->get()->result(); // Untuk mengeksekusi dan mengambil data hasil query
       
        return $result;
    }

    public function update($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}