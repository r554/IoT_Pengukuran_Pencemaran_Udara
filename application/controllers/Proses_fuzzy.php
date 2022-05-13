<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses_fuzzy extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_proses_fuzzy');
        if (empty($_SESSION['nama'])) {
            redirect(site_url('Auth'));
        }
    }

    public function index()
    {
        // $data['data_sum_co'] = $this->M_proses_fuzzy->get_nilai_co_data_akhir();
        // $data['data_sum_no'] = $this->M_proses_fuzzy->get_nilai_no_data_akhir();
        $data['nilai_hasil'] = $this->M_proses_fuzzy->get_hasil_fuzzy();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // $r1 = max(5, 4);
        // var_dump($r1);
        // die();

        $data['title'] = "Data Kriteria";
        $this->load->view('Template/header', $data);
        $this->load->view('v_proses_fuzzy', $data);
        $this->load->view('Template/footer');
    }


    public function fuzzyfikasi()
    {
        $id_admin = $_SESSION['id_admin'];

        $data_co = $this->M_proses_fuzzy->get_nilai_co_data_akhir(); //Mengambil 3 Data CO Terakhir dan di Jumlahkan
        $data_no = $this->M_proses_fuzzy->get_nilai_no_data_akhir(); //Mengambil 3 Data NO Terakhir dan di Jumlahkan

        $avg_co = $data_co['0']->nilai_co / 3; //Nilai Rata - rata CO
        $avg_no = $data_no['0']->nilai_no / 3; //Nilai Rata - rata NO

        // var_dump(round($avg_co, 2));
        // var_dump(round($avg_no, 2));
        // die();


        $derajat_nilai = 1;
        if ($derajat_nilai == 1) {

            //Derajat Keanggotaan CO Himpunan A
            if (round($avg_co, 2) >= 30 && round($avg_co, 2) <= 50) {
                $A = (50 - round($avg_co, 2)) / (50 - 30);
            } else if (round($avg_co, 2) < 30) {
                $A = 1;
            } else if (round($avg_co, 2) > 50) {
                $A = 0;
            }
            $h_a = round($A, 2);

            //Derajat Keanggotaan CO Himpunan B 
            if (round($avg_co, 2) >= 90) {
                $B = 0;
            } else if (round($avg_co, 2) >= 30 && round($avg_co, 2) < 50) {
                $B = (round($avg_co, 2) - 30) / (50 - 30);
            } else if (round($avg_co, 2) >= 70 && round($avg_co, 2) <= 90) {
                $B = (90 - round($avg_co, 2)) / (90 - 70);
            } else if (round($avg_co, 2) >= 50 && round($avg_co, 2) <= 70) {
                $B = 1;
            }
            $h_b = round($B, 2);

            //Derajat Keanggotaan CO Himpunan C 
            if (round($avg_co, 2) >= 146) {
                $C = 0;
            } else if (round($avg_co, 2) >= 70 && round($avg_co, 2) < 90) {
                $C = (round($avg_co, 2) - 70) / (90 - 70);
            } else if (round($avg_co, 2) >= 126 && round($avg_co, 2) <= 146) {
                $C = (146 - round($avg_co, 2)) / (146 - 126);
            } else if (round($avg_co, 2) >= 90 && round($avg_co, 2) <= 126) {
                $C = 1;
            }
            $h_c = round($C, 2);

            //Derajat Keanggotaan CO Himpunan D 
            if (round($avg_co, 2) >= 282) {
                $D = 0;
            } else if (round($avg_co, 2) >= 126 && round($avg_co, 2) < 146) {
                $D = (round($avg_co, 2) - 126) / (146 - 126);
            } else if (round($avg_co, 2) >= 262 && round($avg_co, 2) <= 282) {
                $D = (282 - round($avg_co, 2)) / (282 - 262);
            } else if (round($avg_co, 2) >= 146 && round($avg_co, 2) <= 262) {
                $D = 1;
            }
            $h_d = round($D, 2);

            //Derajat Keanggotaan CO Himpunan E
            if (round($avg_co, 2) >= 262) {
                $E = 0;
            } else if (round($avg_co, 2) >= 262 && round($avg_co, 2) < 287) {
                $E = (round($avg_co, 2) - 262) / (282 - 262);
            } else if (round($avg_co, 2) >= 282) {
                $E = 1;
            } else {
                $E = 0;
            }
            $h_e = round($E, 2);

            // =================================================================

            //Derajat Keanggotaan NO Himpunan A 
            if (round($avg_no, 2) >= 0.1) {
                $A_no = 0;
            } else if (round($avg_no, 2) >= 0.05 && round($avg_no, 2) < 0.1) {
                $A_no = (0.1 - round($avg_no, 2)) / (0.1 - 0.05);
            } else if (round($avg_no, 2) <= 0.05) {
                $A_no = 1;
            }
            $h_no_a = round($A_no, 2);

            //Derajat Keanggotaan NO Himpunan B 
            if (round($avg_no, 2) >= 0.75) {
                $B_no = 0;
            } else if (round($avg_no, 2) >= 0.05 && round($avg_no, 2) < 0.1) {
                $B_no = (round($avg_no, 2) - 0.05) / (0.1 - 0.05);
            } else if (round($avg_no, 2) >= 0.55 && round($avg_no, 2) <= 0.75) {
                $B_no = (0.75 - round($avg_no, 2)) / (0.75 - 0.55);
            } else if (round($avg_no, 2) >= 0.1 && round($avg_no, 2) <= 0.55) {
                $B_no = 1;
            }
            $h_no_b = round($B_no, 2);

            //Derajat Keanggotaan NO Himpunan C 
            if (round($avg_no, 2) >= 1.23) {
                $C_no = 0;
            } else if (round($avg_no, 2) >= 0.55 && round($avg_no, 2) < 0.75) {
                $C_no = (round($avg_no, 2) - 0.55) / (0.75 - 0.55);
            } else if (round($avg_no, 2) >= 1.03 && round($avg_no, 2) <= 1.23) {
                $C_no = (1.23 - round($avg_no, 2)) / (1.23 - 1.03);
            } else if (round($avg_no, 2) >= 0.75 && round($avg_no, 2) <= 1.03) {
                $C_no = 1;
            }
            $h_no_c = round($C_no, 2);

            //Derajat Keanggotaan NO Himpunan D 
            if (round($avg_no, 2) >= 2.36) {
                $D_no = 0;
            } else if (round($avg_no, 2) >= 1.03 && round($avg_no, 2) < 1.23) {
                $D_no = (round($avg_no, 2) - 1.03) / (1.23 - 1.03);
            } else if (round($avg_no, 2) >= 2.16 && round($avg_no, 2) <= 2.36) {
                $D_no = (2.36 - round($avg_no, 2)) / (2.36 - 2.16);
            } else if (round($avg_no, 2) >= 1.23 && round($avg_no, 2) <= 2.16) {
                $D_no = 1;
            }
            $h_no_d = round($D_no, 2);

            //Derajat Keanggotaan NO Himpunan E 
            if (round($avg_no, 2) <= 2.16) {
                $E_no = 0;
            } else if (round($avg_no, 2) >= 2.16 && round($avg_no, 2) < 2.36) {
                $E_no = (round($avg_no, 2) - 2.16) / (2.36 - 2.16);
            } else if (round($avg_no, 2) >= 2.36) {
                $E_no = 1;
            }
            $h_no_e = round($E_no, 2);
        }

        // ===================================================
        # Pembentukan Rule
        // ===================================================

        // IF Baik AND Baik THEN Baik = 50
        $r1 = min($h_a, $h_no_a);
        // IF Baik AND Sedang THEN Sedang = 75
        $r2 = min($h_a, $h_no_b);
        // IF Baik AND Tidak Sehat THEN Tidak Sehat 125
        $r3 = min($h_a, $h_no_c);
        // IF Baik AND Sangat Tidak Sehat THEN Tidak Sehat 175
        $r4 = min($h_a, $h_no_d);
        // IF Baik AND Berbahaya THEN Sangat Tidak Sehat 225
        $r5 = min($h_a, $h_no_e);
        // IF Sedang AND Baik THEN Sedang 75
        $r6 = min($h_b, $h_no_a);
        // IF Sedang AND Sedang THEN Sedang 100
        $r7 = min($h_b, $h_no_b);
        // IF Sedang AND Tidak Sehat THEN Tidak Sehat 150
        $r8 = min($h_b, $h_no_c);
        // IF Sedang AND Sangat Tidak Sehat	THEN Tidak Sehat 200
        $r9 = min($h_b, $h_no_d);
        // IF Sedang AND Berbahaya THEN Sangat Tidak Sehat 250
        $r10 = min($h_b, $h_no_e);
        // IF Tidak Sehat AND Baik THEN Tidak Sehat	125
        $r11 = min($h_c, $h_no_a);
        // IF Tidak Sehat AND Sedang THEN Tidak Sehat 150
        $r12 = min($h_c, $h_no_b);
        // IF Tidak Sehat AND Tidak Sehat THEN Tidak Sehat	200
        $r13 = min($h_c, $h_no_c);
        // IF Tidak Sehat AND Sangat Tidak Sehat THEN Sangat Tidak Sehat 250
        $r14 = min($h_c, $h_no_d);
        // IF Tidak Sehat AND Berbahaya	THEN Sangat Tidak Sehat 300
        $r15 = min($h_c, $h_no_e);
        // IF Sangat Tidak Sehat AND Baik THEN Tidak Sehat 175
        $r16 = min($h_d, $h_no_a);
        // IF Sangat Tidak Sehat AND Sedang	THEN Tidak Sehat 200
        $r17 = min($h_d, $h_no_b);
        // IF Sangat Tidak Sehat AND Tidak Sehat THEN Sangat Tidak Sehat 250
        $r18 = min($h_d, $h_no_c);
        // IF Sangat Tidak Sehat AND Sangat Tidak Sehat	THEN Sangat Tidak Sehat	300
        $r19 = min($h_d, $h_no_d);
        // IF Sangat Tidak Sehat AND Berbahaya THEN Berbahaya 350
        $r20 = min($h_d, $h_no_e);
        // IF Berbahaya AND Baik THEN Sangat Tidak Sehat 225
        $r21 = min($h_e, $h_no_a);
        // IF Berbahaya	AND Sedang THEN Sangat Tidak Sehat 250
        $r22 = min($h_e, $h_no_b);
        // IF Berbahaya	AND Tidak Sehat	THEN Sangat Tidak Sehat	300
        $r23 = min($h_e, $h_no_c);
        // IF Berbahaya	AND Sangat Tidak Sehat THEN Berbahaya 350
        $r24 = min($h_e, $h_no_d);
        // IF Berbahaya	AND Berbahaya THEN Berbahaya 400
        $r25 = min($h_e, $h_no_e);


        // =============================================================
        #Deffuzyfikasi Sugeno Weight Average
        // =============================================================

        $wa = (($r1 * 40) + ($r2 * 40) + ($r3 * 50) + ($r4 * 40) + ($r5 * 50) + ($r6 * 60) + ($r7 * 45) + ($r8 * 55) + ($r9 * 65) + ($r10 * 40) +
            ($r11 * 40) + ($r12 * 50) + ($r13 * 40) + ($r14 * 50) + ($r15 * 60) + ($r16 * 45) + ($r17 * 55) + ($r18 * 65) + ($r19 * 40) + ($r20 * 40) +
            ($r21 * 50) + ($r22 * 40) + ($r23 * 50) + ($r24 * 60) + ($r25 * 45)) /
            ($r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 + $r8 + $r9 + $r10 +
                $r11 + $r12 + $r13 + $r14 + $r15 + $r16 + $r17 + $r18 + $r19 + $r20 +
                $r21 + $r22 + $r23 + $r24 + $r25);

        $data = [
            'id_admin' => $id_admin,
            'co_baik' => $h_a, 'co_sedang' => $h_b, 'co_tidak_sehat' => $h_c, 'co_sangat_tidak_sehat' => $h_d, 'co_berbahaya' => $h_e,
            'no_baik' => $h_no_a, 'no_sedang' => $h_no_b, 'no_tidak_sehat' => $h_no_c, 'no_sangat_tidak_sehat' => $h_no_d, 'no_berbahaya' => $h_no_e,
        ];

        $data2 = [
            'id_admin' => $id_admin,
            'r1' => $r1, 'r2' => $r2, 'r3' => $r3, 'r4' => $r4, 'r5' => $r5, 'r6' => $r6, 'r7' => $r7, 'r8' => $r8, 'r9' => $r9, 'r10' => $r10,
            'r11' => $r11, 'r12' => $r12, 'r13' => $r13, 'r14' => $r14, 'r15' => $r15, 'r16' => $r16, 'r17' => $r17, 'r18' => $r18, 'r19' => $r19, 'r20' => $r20,
            'r21' => $r21, 'r22' => $r22, 'r23' => $r23, 'r24' => $r24, 'r25' => $r25
        ];

        $data3 = [
            'rata_nilai_co' => round($avg_co, 2),
            'rata_nilai_no' => round($avg_no, 2),
            'hasil_fuzzy' => $wa
        ];

        // $cek = $this->fuzzy_m->cekData($id_karyawan);
        // if ($cek->num_rows() >= 1) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        //     DATA SUDAH DI PROSES FUZZY SUGENO</div>');
        //     redirect('prosessugeno/index');
        // } else {
        $this->M_proses_fuzzy->i_derajat_keanggotaan($data);
        $this->M_proses_fuzzy->i_rule_nilai($data2);
        $this->M_proses_fuzzy->hasil_fuzzy($data3);

        redirect(site_url('Proses_fuzzy'));

        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        //         DATA BERHASIL DI PROSES DENGAN METODE FUZZY SUGENO</div>');
        //     redirect('prosessugeno/index');
        // }
    }
}
