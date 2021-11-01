<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasi_control extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $this->load->view('v_registrasi');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'password' => $this->input->post('password1'),
                'is_active' => 1
            ];

            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. </div>');
            redirect('login_control');
        }
    }
}
