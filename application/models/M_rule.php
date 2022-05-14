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

    public function input($data) 
    {
        $this->db->insert('tbl_rule_fuzzy', $data);
    }


    public function edit($where,$table)
    {
        return $this->db->get_where($table, $where);
    }


    public function update($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }


    public function hapus($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}