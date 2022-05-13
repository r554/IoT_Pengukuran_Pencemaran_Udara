<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_sensor extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_nilai_sensor');
        if (empty($_SESSION['nama'])) {
            redirect(site_url('Auth'));
        }
    }

    public function index()
    {
        $data['data_nilai'] = $this->M_nilai_sensor->get_nilai_sensor();
        $data['title'] = "Data Nilai";
        $this->load->view('Template/header', $data);
        $this->load->view('v_nilai_sensor', $data);
        $this->load->view('Template/footer');
    }
}
