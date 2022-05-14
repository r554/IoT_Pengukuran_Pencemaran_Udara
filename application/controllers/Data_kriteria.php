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

    public function tambah()
    {
    
        $data['title'] = "Tambah Data Kriteria";
        $this->load->view('Template/header', $data);
        $this->load->view('v_tambah_kriteria', $data);
        $this->load->view('Template/footer');
    }



    public function tambah_data()
	{
         
        $id = $this->input->post('id_kriteria');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $himpunan1 = $this->input->post('himpunan1');
        $himpunan2 = $this->input->post('himpunan2');
        $himpunan3 = $this->input->post('himpunan3');
        $himpunan4 = $this->input->post('himpunan4');
        $himpunan5 = $this->input->post('himpunan5');
        $batas_rendah = $this->input->post('batas_rendah');
        $batas_sedang = $this->input->post('batas_sedang');
        $batas_tinggi = $this->input->post('batas_tinggi');
        $data = array(
            
            'nama_kriteria' => $nama_kriteria,
            'himpunan1' => $himpunan1,
            'himpunan2' => $himpunan2,
            'himpunan3' => $himpunan3,
            'himpunan4' => $himpunan4,
            'himpunan5' => $himpunan5,
            'batas_rendah' => $batas_rendah,
            'batas_sedang' => $batas_sedang,
            'batas_tinggi' => $batas_tinggi
        );
        $where = array(
            'id_kriteria' => $id
        );
        $this->M_kriteria->input($data,'tbl_kriteria');
        redirect('Data_kriteria');
    }


    public function edit($id)
    {
        $where = array ('id_kriteria' => $id);
        $data['data_kriteria'] = $this->M_kriteria->edit($where,'tbl_kriteria')->result();
     
		$data['title'] = "Edit Data Kriteria";
        $this->load->view('Template/header', $data);
        $this->load->view('v_edit_kriteria', $data);
        $this->load->view('Template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_kriteria');
        $nama_kriteria = $this->input->post('nama_kriteria');
        $himpunan1 = $this->input->post('himpunan1');
        $himpunan2 = $this->input->post('himpunan2');
        $himpunan3 = $this->input->post('himpunan3');
        $himpunan4 = $this->input->post('himpunan4');
        $himpunan5 = $this->input->post('himpunan5');
        $batas_rendah = $this->input->post('batas_rendah');
        $batas_sedang = $this->input->post('batas_sedang');
        $batas_tinggi = $this->input->post('batas_tinggi');
        $data = array(
            
            'nama_kriteria' => $nama_kriteria,
            'himpunan1' => $himpunan1,
            'himpunan2' => $himpunan2,
            'himpunan3' => $himpunan3,
            'himpunan4' => $himpunan4,
            'himpunan5' => $himpunan5,
            'batas_rendah' => $batas_rendah,
            'batas_sedang' => $batas_sedang,
            'batas_tinggi' => $batas_tinggi
        );
        $where = array(
            'id_kriteria' => $id
        );
        $this->M_kriteria->update($where,$data,'tbl_kriteria');
        redirect('Data_kriteria');
    }


    public function hapus ($id)
    {
        $where = array ('id_kriteria' => $id);
        $this->M_kriteria->hapus($where,'tbl_kriteria');
        redirect('Data_kriteria');
    }
}