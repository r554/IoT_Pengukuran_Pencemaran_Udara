<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
       $this->load->model('M_admin');
        if (empty($_SESSION['nama'])) {
            redirect(site_url('Auth'));
        }
    }

    public function edit($id)
    {
        $data['data_admin'] = $this->M_admin->get_admin();
        $data['title'] = "Data Profile";
        $this->load->view('Template/header', $data);
        $this->load->view('v_edit_profile.php', $data);
        $this->load->view('Template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_admin');
        $nama_admin = $this->input->post('nama_admin');
        $telp_admin = $this->input->post('telp_admin');
        $alamat_admin = $this->input->post('alamat_admin');
        $email_admin = $this->input->post('email_admin');
      
        $data = array(
            
            'nama_admin' => $nama_admin,
            'telp_admin' => $telp_admin,
            'alamat_admin' => $alamat_admin,
            'email_admin' => $email_admin
        );
        $where = array(
            'id_admin' => $id
        );
        $this->M_admin->update($where,$data,'tbl_admin');
        $this->session->set_flashdata('flash','Diubah');
        redirect('Dashboard');
    }
}