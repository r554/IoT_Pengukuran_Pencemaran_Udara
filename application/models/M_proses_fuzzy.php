<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_proses_fuzzy extends CI_Model
{
    public function get_nilai_co_data_akhir()
    {
        $query = $this->db->query("SELECT sum(nilai_co) as nilai_co FROM (SELECT nilai_co FROM nilai_sensor ORDER BY id_nilai DESC LIMIT 3 ) AS sum_co;");
        return $query->result();
    }

    public function get_nilai_no_data_akhir()
    {
        $query = $this->db->query("SELECT sum(nilai_no) as nilai_no FROM (SELECT nilai_no FROM nilai_sensor ORDER BY id_nilai DESC LIMIT 3 ) AS sum_no;");
        return $query->result();
    }

    public function i_derajat_keanggotaan($data)
    {
        $data = [

            'id_nilai_derajat' => $this->autonumber_nilai_derajat(),
            'id_admin' => $data['id_admin'],

            'co_baik' => $data['co_baik'],
            'co_sedang' => $data['co_sedang'],
            'co_tidak_sehat' => $data['co_tidak_sehat'],
            'co_sangat_tidak_sehat' => $data['co_sangat_tidak_sehat'],
            'co_berbahaya' => $data['co_berbahaya'],

            'no_baik' => $data['no_baik'],
            'no_sedang' => $data['no_sedang'],
            'no_tidak_sehat' => $data['no_tidak_sehat'],
            'no_sangat_tidak_sehat' => $data['no_sangat_tidak_sehat'],
            'no_berbahaya' => $data['no_berbahaya'],

        ];

        $this->db->insert('tbl_nilai_derajat', $data);
    }

    public function i_rule_nilai($data2)
    {
        $data = [
            'id_nilai_derajat' => $this->autonumber_nilai_derajat(),
            'rule_1' => $data2['r1'], 'rule_2' => $data2['r2'], 'rule_3' => $data2['r3'], 'rule_4' => $data2['r4'], 'rule_5' => $data2['r5'],
            'rule_6' => $data2['r6'], 'rule_7' => $data2['r7'], 'rule_8' => $data2['r8'], 'rule_9' => $data2['r9'], 'rule_10' => $data2['r10'],
            'rule_11' => $data2['r11'], 'rule_12' => $data2['r12'], 'rule_13' => $data2['r13'], 'rule_14' => $data2['r14'], 'rule_15' => $data2['r15'],
            'rule_16' => $data2['r16'], 'rule_17' => $data2['r17'], 'rule_18' => $data2['r18'], 'rule_19' => $data2['r19'], 'rule_20' => $data2['r20'],
            'rule_21' => $data2['r21'], 'rule_22' => $data2['r22'], 'rule_23' => $data2['r23'], 'rule_24' => $data2['r24'], 'rule_25' => $data2['r25']
        ];

        $this->db->insert('tbl_nilai_rule', $data);
    }

    public function hasil_fuzzy($data3)
    {
        $data = [
            'id_nilai_derajat' => $this->autonumber_nilai_derajat(),
            'rata_nilai_co'    => $data3['rata_nilai_co'],
            'rata_nilai_no'    => $data3['rata_nilai_no'],
            'hasil_fuzzy'      => $data3['hasil_fuzzy'],
        ];

        $this->db->insert('tbl_hasil_fuzzy', $data);
    }

    public function get_hasil_fuzzy()
    {
        // $this->db->select('*');
        // $this->db->from('tbl_hasil_fuzzy');
        // return $this->db->get();

        $this->db->select('*');
        $this->db->from('tbl_hasil_fuzzy');
        $result = $this->db->get()->result(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //membuat auto code 
    function autonumber_nilai_derajat()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_nilai_derajat,2)) AS kd_max FROM tbl_nilai_derajat");
        $kd = "";
        $i = "ND";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%02s", $tmp);
            }
        } else {
            $kd = "01";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $i . $kd;
    }

    public function getId_nilai_derajat($id)
    {
        return $this->db->get_where('tbl_nilai_derajat', ['id_nilai_derajat' => $id])->row_array();
    }

    public function getId_nilai_rule($id)
    {
        return $this->db->get_where('tbl_nilai_rule', ['id_nilai_derajat' => $id])->row_array();
    }

    public function getId_hasil($id)
    {
        return $this->db->get_where('tbl_hasil_fuzzy', ['id_nilai_derajat' => $id])->row_array();
    }
}
