<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('/');
        }
        $this->load->model('laporan_penjualan_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();

        $xtanggalawal = date('Y/m/1');
        $xtanggalakhir = date('Y/m/t');

        $data['untung'] = $this->laporan_penjualan_model->labauntung($xtanggalawal, $xtanggalakhir)->untung;
        $data['laba'] = $this->laporan_penjualan_model->labauntung($xtanggalawal, $xtanggalakhir)->laba;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/index', $data);
    }
}
