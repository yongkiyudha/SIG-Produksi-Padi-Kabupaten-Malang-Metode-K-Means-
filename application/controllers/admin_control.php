<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_control extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('data_cluster');
        $this->load->model('M_Padi');
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->model('data_cluster');
        $data['point'] = $this->db->get('tb_cluster')->result_array();
        $data['dataCluster'] = $this->db->get('tb_cluster')->result_array();
        $data['total_rows'] = $this->db->get('tb_cluster')->num_rows();


        $data['tb_cluster'] = $this->db->query("select * from tb_cluster order by id_cluster desc limit 10")->result();



        $this->load->view('admin/v_admin');
    }
}
