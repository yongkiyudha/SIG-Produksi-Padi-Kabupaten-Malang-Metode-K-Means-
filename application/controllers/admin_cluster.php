<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_cluster extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('data_cluster');
        $this->load->helper('url');
    }

    function index()
    {
        $data['cluster'] = $this->data_cluster->tampil_data()->result();
        $this->load->view('admin/v_admin_cluster', $data);
    }

    function tambah()
    {
        $this->load->view('admin/v_tambah_cluster');
        $produk = $this->data_cluster;
    }


    function tambah_aksi()
    {
        $id_cluster = $this->input->post('id_cluster');
        $tahun = $this->input->post('tahun');
        $kecamatan = $this->input->post('kecamatan');
        $cluster = $this->input->post('cluster');

        $data = array(
            'id_cluster' => $id_cluster,
            'tahun' => $tahun,
            'kecamatan' => $kecamatan,
            'cluster' => $cluster,
        );
        $this->data_cluster->input_data($data, 'tb_cluster');
        redirect('admin_cluster');
    }

    function edit($id_cluster)
    {
        $where = array('id_cluster' => $id_cluster);
        $data['tb_cluster'] = $this->data_cluster->edit_data($where, 'tb_cluster')->result();
        $this->load->view('admin/v_edit_cluster', $data);
    }

    function update($id_cluster)
    {
        $tahun = $this->input->post('tahun');
        $kecamatan = $this->input->post('kecamatan');
        $cluster = $this->input->post('cluster');


        $data = array(
            'tahun' => $tahun,
            'kecamatan' => $kecamatan,
            'cluster' => $cluster,
        );

        $where = array(
            'id_cluster' => $id_cluster
        );

        $this->data_cluster->update_data($where, $data, 'tb_cluster');
        redirect('admin_cluster');
    }

    function hapus($id_cluster)
    {
        $where = array('id_cluster' => $id_cluster);
        $this->data_cluster->hapus_data($where, 'tb_cluster');
        redirect('admin_cluster');
    }
}
