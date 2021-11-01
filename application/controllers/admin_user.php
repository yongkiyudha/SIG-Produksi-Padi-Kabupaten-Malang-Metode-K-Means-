<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('data_user');
        $this->load->helper('url');
    }

    function index()
    {
        $data['user'] = $this->data_user->tampil_data()->result();
        $this->load->view('admin/v_admin_user', $data);
    }

    function tambah()
    {
        $this->load->view('admin/v_tambah_user');
        $product = $this->data_user;
    }


    function tambah_aksi()
    {
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $is_active = $this->input->post('is_active');

        $data = array(
            'id_user' => $id_user,
            'username' => $username,
            'password' => $password,
            'is_active' => $is_active
        );
        $this->data_user->input_data($data, 'tb_user');
        redirect('admin_user');
    }

    function edit($id_user)
    {
        $where = array('id_user' => $id_user);
        $data['tb_user'] = $this->data_user->edit_data($where, 'tb_user')->result();
        $this->load->view('admin/v_edit_user', $data);
    }

    function update($id_user)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $is_active = $this->input->post('is_active');

        $data = array(
            'username' => $username,
            'password' => $password,
            'is_active' => (int)$is_active
        );

        $where = array(
            'id_user' => $id_user
        );

        $this->data_user->update_data($where, $data, 'tb_user');
        redirect('admin_user');
    }

    function hapus($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->data_user->hapus_data($where, 'tb_user');
        redirect('admin_user');
    }
}
