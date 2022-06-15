<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');

        $this->load->library('cart');
        $this->load->model('produk_model');
        $this->load->model('order_model');
        $this->load->model('kategori_produk_model');
        $this->load->model('utama_model');
        $this->load->model('transaksi_model');
        $this->load->model('stok_keluar_model');
        $this->load->model('auth_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Log In Sistem Penjualan';
            $data['namatoko'] = $this->auth_model->getToko();
            $this->load->view('frontend/themes/auth_header', $data);
            $this->load->view('frontend/pages/login', $data);
            $this->load->view('frontend/themes/auth_footer', $data);
        } else {
            $this->_login();
        }

    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('pelanggan', ['email' => $email])->row_array();
        $toko = $this->auth_model->getToko();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'nama' => $user['nama'],
                        'status' => 'login',
                        'is_logged_in' => TRUE,
                        'toko' => $toko,
                        'email' => $user['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('Utama/tampilanutama');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password.!</div>');
                    redirect('Utama');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not active.!</div>');
                redirect('Utama');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered.!</div>');
            redirect('Utama');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_logged_in');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have been LogOut.!</div>');
        redirect('Utama');
    }

    public function registration()
    {
        $data['title'] = 'Registrasi';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email]', [
            'is_unique' => 'This Email has Already Registered'
        ]);
        $this->form_validation->set_rules('no_identitas', 'No Identitas', 'required|trim|is_unique[pelanggan.no_identitas]', [
            'is_unique' => 'This No Identitas has Already Registered'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|is_unique[pelanggan.telepon]', [
            'is_unique' => 'This No Telepon has Already Registered'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Dont Match !',
            'min_length' => 'Password to Short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/themes/auth_header', $data);
            $this->load->view('frontend/pages/registration', $data);
            $this->load->view('frontend/themes/auth_footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'no_identitas' => $this->input->post('no_identitas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'is_active' => 1,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation!, Your Account Has been Created</div>');
            redirect('Utama');
        }
    }
    public function simpanprofil()
    {
        $id = $this->input->post('idedit');
        $data = array(
            'nama' => $this->input->post('nama'),
            'no_identitas' => $this->input->post('no_identitas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );
        $this->db->where('id', $id);
        $this->db->update('pelanggan', $data);
        $this->session->set_flashdata('message', 'Berhasil Di Update');
        
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_logged_in');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses Update Profile, Silahkan Login Ulang</div>');
        redirect('/');
    }

    public function tampilanutama()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect('/');
        }
        $data['title'] = 'Selamat Datang';
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();

        $kategori = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['produk'] = $this->utama_model->get_produk_kategori($kategori);
        $data['kategori'] = $this->utama_model->get_kategori_all();

        $this->load->view('frontend/themes/header', $data);
        $this->load->view('frontend/shopping/list_produk', $data);
        $this->load->view('frontend/themes/footer', $data);
    }
    public function tampil_cart()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect('/');
        }
        $data['title'] = 'Selamat Datang';
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->utama_model->get_kategori_all();
        $this->load->view('frontend/themes/header', $data);
        $this->load->view('frontend/shopping/tampil_cart', $data);
        $this->load->view('frontend/themes/footer', $data);
    }

    public function check_out()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect('/');
        }
        $data['title'] = 'Selamat Datang';
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->utama_model->get_kategori_all();
        $this->load->view('frontend/themes/header', $data);
        $this->load->view('frontend/shopping/check_out', $data);
        $this->load->view('frontend/themes/footer', $data);
    }

    public function detail_produk()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect('/');
        }
        $data['title'] = 'Selamat Datang';
        $data['user'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->uri->segment(3);
        $data['kategori'] = $this->utama_model->get_kategori_all();
        $data['detail'] = $this->utama_model->get_produk_id($id);
        $this->load->view('frontend/themes/header', $data);
        $this->load->view('frontend/shopping/detail_produk', $data);
        $this->load->view('frontend/themes/footer');
    }


    function tambah()
    {
        $data_produk = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('nama'),
            'price' => $this->input->post('harga'),
            'gambar' => $this->input->post('gambar'),
            'qty' => $this->input->post('qty')
        );
        $this->cart->insert($data_produk);
        redirect('Utama/tampilanutama');
    }

    function hapus($rowid)
    {
        if ($rowid == "all") {
            $this->cart->destroy();
        } else {
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
        }
        redirect('Utama/tampil_cart');
    }

    function ubah_cart()
    {
        $cart_info = $_POST['cart'];
        foreach ($cart_info as $id => $cart) {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty
            );
            $this->cart->update($data);
        }
        redirect('Utama/tampil_cart');
    }

    public function proses_order()
    {
        $config['upload_path'] = './upload/bukti/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 20000;

        $this->load->library('upload', $config);

        $total = $this->cart->total();
        $pelanggan = $this->session->userdata('id');

        if (!$this->upload->do_upload('file')) {
            $message = array('error' => $this->upload->display_errors());
            echo "<script>alert('$message');</script>";
        } else {
            if ($cart = $this->cart->contents()) {
                $nomornota = $this->order_model->getnomornota();
                $fileData = $this->upload->data();
                $data_order = array(
                    'jumlah_uang' => $total,
                    'nota' => $nomornota,
                    'pelanggan' => $pelanggan,
                    'tanggal' => date('Y-m-d H:i:s'),
                    'kasir' => 0,
                    'status' => 0,
                    'bukti' => $fileData['file_name']
                );
                $id_order = $this->order_model->tambah_order($data_order);
                foreach ($cart as $item) {
                    $data_detail = array(
                        'transaksi_id' => $id_order,
                        'produk' => $item['id'],
                        'qty' => $item['qty'],
                        'harga' => $item['price']
                    );
                    $id = $item['id'];
                    $jumlah = $item['qty'];
                    $stok = $this->stok_keluar_model->getStok($id)->stok;
                    $rumus = max($stok - $jumlah, 0);
                    $addStok = $this->stok_keluar_model->addStok($id, $rumus);
                    $proses = $this->order_model->tambah_detail_order($data_detail);
                }
            }
            $this->session->set_flashdata('message', 'sukses');
            $this->cart->destroy();
            redirect('Utama/tampilanutama');
        }
    }
}
