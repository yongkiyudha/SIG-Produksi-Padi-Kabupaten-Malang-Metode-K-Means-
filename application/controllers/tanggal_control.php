<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tanggal_control extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('data_tanggal');
        $this->load->helper('url');
    }

    function index()
    {
        $data['tanggal'] = $this->data_tanggal->tampil_data()->result();
        $this->load->view('admin/v_admin_tanggal', $data);
    }

    function tambah()
    {
        $this->load->view('admin/v_tambah_tanggal');
        $produk = $this->data_tanggal;
    }


    function tambah_aksi()
    {
        $id_tanggal = $this->input->post('id_tanggal');
        $tanggal = $this->input->post('tanggal');
        

        $data = array(
            'id_tanggal' => $id_tanggal,
            'tanggal' => $tanggal,
            
        );
        $this->data_tanggal->input_data($data, 'tb_tanggal');
        redirect('tanggal_control');
    }

    function edit($id_tanggal)
    {
        $where = array('id_tanggal' => $id_tanggal);
        $data['tb_tanggal'] = $this->data_tanggal->edit_data($where, 'tb_tanggal')->result();
        $this->load->view('admin/v_edit_tanggal', $data);
    }

    function update($id_tanggal)
    {
        
        $tanggal = $this->input->post('tanggal');


        $data = array(
            
            'tanggal' => $tanggal,
        );

        $where = array(
            'id_tanggal' => $id_tanggal
        );

        $this->data_tanggal->update_data($where, $data, 'tb_tanggal');
        redirect('tanggal_control');
    }

    function hapus($id_tanggal)
    {
        $where = array('id_tanggal' => $id_tanggal);
        $this->data_tanggal->hapus_data($where, 'tb_tanggal');
        redirect('tanggal_control');
    }
}