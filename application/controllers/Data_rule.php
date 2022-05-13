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
}
