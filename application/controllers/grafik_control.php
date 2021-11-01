<?php
defined('BASEPATH') or exit('No direct script access allowed');

class grafik_control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_produksi');
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->model('data_produksi');
        $data['point'] = $this->db->get('tb_produksi')->result_array();
        $data['dataProduksi'] = $this->db->get('tb_produksi')->result_array();
        $data['total_rows'] = $this->db->get('tb_produksi')->num_rows();
        $data['selisih_2020_2019'] = $this->getSelisih('2020', '2019');
        $data['selisih_2019_2018'] = $this->getSelisih('2019', '2018');
        // $sql = "SELECT produksi, sum(if(tahun = 2018,1,0)) FROM tb_produksi GROUP BY produksi";
        // $data['test'] = $this->db->query($sql);
        //  = $this->db->get('tb_produksi')->result();

        // $test = $this->db->get('tb_produksi')->result_array();
        $total = $this->db->get('tb_produksi')->num_rows();
        $select2018 = $this->db->get('tb_produksi')->result_array();
        $selectProduk2018 = $this->db->get('tb_produksi')->result_array();
        $data['select2018'] = $select2018[0]['tahun'];
        $data['selectProduk2018'] = $selectProduk2018[0]['produksi'];

        $count2018 = 0;
        $count2019 = 0;
        $count2020 = 0;

        for ($i = 0; $i <= $total; $i++) {
            if ($select2018[$i]['tahun'] == '2018') {
                $count2018 = $count2018 + $selectProduk2018[$i]['produksi'];
            } elseif ($select2018[$i]['tahun'] == '2019') {
                $count2019 = $count2019 + $selectProduk2018[$i]['produksi'];
            } elseif ($select2018[$i]['tahun'] == '2020') {
                $count2020 = $count2020 + $selectProduk2018[$i]['produksi'];
            } else {
                $count2018 = $count2018;
                $count2019 = $count2019;
                $count2020 = $count2020;
            }
        }

        $data['count2018'] = $count2018;
        $data['count2019'] = $count2019;
        $data['count2020'] = $count2020;

        $this->load->view('v_grafik', $data);
    }

    public function getSelisih($tahun1, $tahun2)
    {
        $dt[$tahun1] = $this->db->get_where('tb_produksi', array('tahun' => $tahun1))->result();
        $dt[$tahun2] = $this->db->get_where('tb_produksi', array('tahun' => $tahun2))->result();
        $selisih = array();
        foreach ($dt[$tahun1] as $key) {
            foreach ($dt[$tahun2] as $key2) {
                if (trim($key->kecamatan, ' ') == trim($key2->kecamatan, ' ')) {
                    $selisih[trim($key->kecamatan, ' ')] = $key->produksi - $key2->produksi;
                }
            }
        }
        arsort($selisih);
        return $selisih;
    }
}
