<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('/');
        }
        $this->load->model('kritik_model');
    }

    public function index()
    {
        $data['title'] = 'Kritik dan Saran Pelanggan';
        $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['kritik'] = $this->kritik_model->read();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kritik/index', $data);
    }
}
