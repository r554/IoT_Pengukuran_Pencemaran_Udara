<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_grafik');
        if (empty($_SESSION['nama'])) {
            redirect(site_url('Auth'));
        }
    }

    public function index()
    {
       
        $data['title'] = "Dashboard";
        $data['data_tanggal'] = $this->M_grafik->get_tanggal();
       
        
        $data['data_co'] = $this->M_grafik->get_co();
        $data['data_no'] = $this->M_grafik->get_no();
      
        $this->load->view('Template/header', $data);
        $this->load->view('v_dashboard', $data);
        $this->load->view('Template/footer');
    }
}