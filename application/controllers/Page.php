<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('produk_model');
        $this->load->model('order_model');
        $this->load->model('kategori_produk_model');
        $this->load->model('utama_model');
        $this->load->model('transaksi_model');
        $this->load->model('stok_keluar_model');
    }
    public function index()
    {
        $data['title'] = 'Selamat Datang';
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $kategori = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['produk'] = $this->utama_model->get_produk_kategori($kategori);
        $data['kategori'] = $this->utama_model->get_kategori_all();

        $this->load->view('frontend/themes/header', $data);
        $this->load->view('frontend/shopping/list_produk', $data);
        $this->load->view('frontend/themes/footer', $data);
    }
    public function profil()
    {
        $data['title'] = 'Selamat Datang';
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $kategori = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['produk'] = $this->utama_model->get_produk_kategori($kategori);
        $data['kategori'] = $this->utama_model->get_kategori_all();

        $this->load->view('frontend/themes/header', $data);
        $this->load->view('frontend/pages/profil', $data);
    }
    public function cara_bayar()
    {
        $data['title'] = 'Selamat Datang';
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $kategori = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['produk'] = $this->utama_model->get_produk_kategori($kategori);
        $data['kategori'] = $this->utama_model->get_kategori_all();

        $this->load->view('frontend/themes/header', $data);
        $this->load->view('frontend/pages/cara_bayar', $data);
        $this->load->view('frontend/themes/footer', $data);
    }
}
