<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kriteria extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kriteria');
        if (empty($_SESSION['nama'])) {
            redirect(site_url('Auth'));
        }
    }

    public function index()
    {
        $data['data_kriteria'] = $this->M_kriteria->get_kriteria();
        $data['title'] = "Data Kriteria";
        $this->load->view('Template/header', $data);
        $this->load->view('v_kriteria', $data);
        $this->load->view('Template/footer');
    }
}
