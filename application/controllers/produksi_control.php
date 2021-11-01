<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produksi_control extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('data_produksi');
        $this->load->helper('url');
    }

    function index()
    {
        $data['produksi'] = $this->data_produksi->tampil_data()->result();
        $this->load->view('v_produksi', $data);
    }
    function tambah_aksi()
    {
        $id_produksi = $this->input->post('id_produksi');
        $kecamatan = $this->input->post('kecamatan');
        $tahun = $this->input->post('tahun');
        $tanam = $this->input->post('tanam');
        $panen = $this->input->post('panen');
        $produktivitas = $this->input->post('produktivitas');
        $produksi = $this->input->post('produksi');
        $longitude = $this->input->post('longitude');
        $latitude = $this->input->post('latitude');


        $data = array(
            'id_produksi' => $id_produksi,
            'kecamatan' => $kecamatan,
            'tahun' => $tahun,
            'tanam' => $tanam,
            'panen' => $panen,
            'produktivitas' => $produktivitas,
            'produksi' => $produksi,
            'longitude' => $longitude,
            'latitude' => $latitude,
        );
        $this->data_pendaftaran->input_data($data, 'tb_produksi');
        redirect('produksi_control');
    }

    function edit($id_produksi)
    {
        $where = array('id_produksi' => $id_produksi);
        $data['tb_produksi'] = $this->data_produksi->edit_data($where, 'tb_produksi')->result();
        $this->load->view('admin/v_edit_produksi', $data);
    }

    function update()
    {
        $id_produksi = $this->input->post('id_produksi');
        $kecamatan = $this->input->post('kecamatan');
        $tahun = $this->input->post('tahun');
        $tanam = $this->input->post('tanam');
        $panen = $this->input->post('panen');
        $produktivitas = $this->input->post('produktivitas');
        $produksi = $this->input->post('produksi');
        $longitude = $this->input->post('longitude');
        $latitude = $this->input->post('latitude');
        $data = array(
            'id_produksi' => $id_produksi,
            'kecamatan' => $kecamatan,
            'tahun' => $tahun,
            'tanam' => $tanam,
            'panen' => $panen,
            'produktivitas' => $produktivitas,
            'produksi' => $produksi,
            'longitude' => $longitude,
            'latitude' => $latitude
        );

        $where = array(
            'id_produksi' => $id_produksi
        );

        $this->data_produksi->update_data($where, $data, 'tb_produksi');
        redirect('produksi_control');
    }
}
