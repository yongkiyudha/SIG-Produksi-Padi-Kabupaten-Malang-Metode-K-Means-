<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_map extends CI_Controller
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
        $this->load->view('admin/v_admin_map', $data);
    }
    public function k_means()
    {
        $this->load->view('k_means');
    }
}
