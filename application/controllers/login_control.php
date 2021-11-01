<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_control extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        //jika usernya ada

        if ($user) {
            if ($user['is_active'] == 1) {
                // if (password_verify($password, $user['password'])) {
                if ($password === $user['password']) {
                    $data = [
                        'username' => $user['username']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin_control');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password. </div>');
                    // $this->session->set_flashdata(
                    //     'message',
                    //     '<div class="alert alert-danger" role="alert">' + $username + '</div>'
                    // );
                    redirect('login_control');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Username has been not activated. </div>');
                // $this->session->set_flashdata(
                //     'message',
                //     '<div class="alert alert-danger" role="alert">' + $username + '</div>'
                // );
                redirect('login_control');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username is not registered. </div>');
            redirect('login_control');
        }
    }
}
