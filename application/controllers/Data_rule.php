<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_rule extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rule');
        if (empty($_SESSION['nama'])) {
            redirect(site_url('Auth'));
        }
    }

    public function index()
    {
        $data['data_rule'] = $this->M_rule->get_rule();
        $data['title'] = "Data Rule";
        $this->load->view('Template/header', $data);
        $this->load->view('v_rule', $data);
        $this->load->view('Template/footer');
    }

    public function tambah()
    {
    
        $data['title'] = "Tambah Data Rule";
        $this->load->view('Template/header', $data);
        $this->load->view('v_tambah_rule', $data);
        $this->load->view('Template/footer');
    }



    public function tambah_data()
	{
         
        $id = $this->input->post('id_rule');
        $co = $this->input->post('co');
        $no = $this->input->post('no');
        $nilai = $this->input->post('nilai');
      
        $data = array(
            
            'co' => $co,
            'no' => $no,
            'nilai' => $nilai
        );
        $where = array(
            'id_rule' => $id
        );
        $this->M_rule->input($data,'tbl_rule_fuzzy');
        redirect('Data_rule');
    }


    public function edit($id)
    {
        $where = array ('id_rule' => $id);
        $data['data_rule'] = $this->M_rule->edit($where,'tbl_rule_fuzzy')->result();
     
		$data['title'] = "Edit Data Rule";
        $this->load->view('Template/header', $data);
        $this->load->view('v_edit_rule', $data);
        $this->load->view('Template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_rule');
        $co = $this->input->post('co');
        $no = $this->input->post('no');
        $nilai = $this->input->post('nilai');
      
        $data = array(
            
            'co' => $co,
            'no' => $no,
            'nilai' => $nilai
        );
        $where = array(
            'id_rule' => $id
        );
        $this->M_rule->update($where,$data,'tbl_rule_fuzzy');
        redirect('Data_rule');
    }


    public function hapus ($id)
    {
        $where = array ('id_rule' => $id);
        $this->M_rule->hapus($where,'tbl_rule_fuzzy');
        redirect('Data_rule');
    }
}