<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            redirect('/');
        }
        $this->load->model('banner_model');
    }

    public function index()
    {
        $data['title'] = 'Banner Promo';
        $data['user'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['banner'] = $this->banner_model->read();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('banner/index', $data);
    }

    public function tambah()
    {

        $config['upload_path'] = './upload/banner/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 20000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gbbanner')) {
            $message = array('error' => $this->upload->display_errors());
            echo "<script>alert('$message');</script>";
        } else {
            $fileData = $this->upload->data();
            $data = array(
                'keterangan' => $this->input->post('keterangan'),
                'gambar' => $fileData['file_name']
            );
            $this->db->insert('banner', $data);
            $this->session->set_flashdata('message', 'Berhasil Ditambah');
            redirect('Banner');
        }
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('banner');
        $this->session->set_flashdata('message', 'Berhasil Dihapus');
        redirect('Banner');
    }

    public function edit()
    {
        $id = $this->input->post('idedit');

        $config['upload_path'] = './upload/banner/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 20000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gbbanneredit')) {
            $data = array(
                'keterangan' => $this->input->post('keteranganedit')
            );
            $this->db->where('id', $id);
            $this->db->update('banner', $data);
            $this->session->set_flashdata('message', 'Berhasil Di Update');
            redirect('Banner');
        } else {
            $fileData = $this->upload->data();
            $data = array(
                'keterangan' => $this->input->post('keteranganedit'),
                'gambar' => $fileData['file_name']
            );
            $this->db->where('id', $id);
            $this->db->update('banner', $data);
            $this->session->set_flashdata('message', 'Berhasil Di Update');
            redirect('Banner');
        }
    }
}
