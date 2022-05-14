<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kirim_data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function input_data()
    {
        // baca data yang dikirim data esp8266
        $data = [
            "nilai_co" => $_GET['nilai_co'],
            "nilai_no" => $_GET['nilai_no'],
        ];

        // simpan data sensor ke tabel gas
        $simpan = $this->db->insert("nilai_sensor", $data);

        //uji simpan respon
        if ($simpan) {
            echo "Berhasil";
        } else {
            echo "gagal";
        }
    }
}
