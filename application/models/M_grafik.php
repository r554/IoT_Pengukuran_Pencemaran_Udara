<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_grafik extends CI_Model
{
    public function get_tanggal()
    {
        $this->db->select('tanggal_input');
        $this->db->from('nilai_sensor');
      
        $this->db->order_by('id_nilai', 'ASC');
      
        $result = $this->db->get()->result(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    public function get_co()
    {
        $this->db->select('nilai_co');
        $this->db->from('nilai_sensor');
      
        $this->db->order_by('id_nilai', 'ASC');
      
        $result = $this->db->get()->result(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
    

    
    public function get_no()
    {
        $this->db->select('nilai_no');
        $this->db->from('nilai_sensor');
      
        $this->db->order_by('id_nilai', 'ASC');
      
        $result = $this->db->get()->result(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
}