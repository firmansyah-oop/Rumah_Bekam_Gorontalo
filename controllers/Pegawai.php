<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    // harus di semua controller, kecuali controller login
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('danger', '<div class="alert alert-danger" role="alert"> Silahkan login terlebih dahulu!</div>');
            redirect('login');
        }
    }

    public function index()
    {
        $id_role =$this->db->get_where('user', ['username' => $this->session->userdata('id_role')])->row_array();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['icon'] = 'fas fa-user-tie';
        $data['judul'] = 'Daftar Pegawai';
        // $data['pegawai'] = $this->model('Pegawai_model')->getAllPegawai();
        $this->load->model('m_pegawai');
        $data['pegawai'] = $this->m_pegawai->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function tambahData()
    {
        $id_role =$this->db->get_where('user', ['username' => $this->session->userdata('id_role')])->row_array();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->model('m_pegawai');
        $data['pegawai'] = $this->m_pegawai->get_data();
        $data['icon'] = 'fas fa-user-tie';
        $data['judul'] = 'Daftar Pegawai';

        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/tambah', $data);
        $this->load->view('templates/footer');
    }
    public function prosesTambahData()
    {
        $this->m_pegawai->prosesTambahData();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan</div>');
        redirect('pegawai');

    }

    // public function tambah()
    // {
    //     if ($this->model('Pegawai_model')->tambahDataPegawai($_POST) > 0) {
    //         Flasher::setFlash('Data Pegawai', 'BERHASIL', 'Ditambahkan', 'success');
    //         header('location: ' . BASEURL . '/pegawai');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Pegawai',  'GAGAL', 'Ditambahkan', 'danger');
    //         header('location: ' . BASEURL . '/pegawai');
    //         exit;
    //     }
    // }

    // public function hapus($id_pegawai)
    // {
    //     if ($this->model('Pegawai_model')->hapusDataPegawai($id_pegawai) > 0) {
    //         Flasher::setFlash('Data Pegawai', 'BERHASIL', 'Dihapus', 'success');
    //         header('location: ' . BASEURL . '/pegawai');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Pegawai',  'GAGAL', 'Dihapus', 'danger');
    //         header('location: ' . BASEURL . '/pegawai');
    //         exit;
    //     }
    // }

    // public function getUbah()
    // {
    //     echo json_encode($this->model('Pegawai_model')->getPegawaiById($_POST['id_pegawai']));
    // }

    // public function ubah()
    // {
    //     if ($this->model('Pegawai_model')->ubahDataPegawai($_POST) > 0) {
    //         Flasher::setFlash('Data Pegawai', 'Berhasil', 'Diubah', 'success');
    //         header('Location: ' . BASEURL . '/pegawai');
    //         exit;
    //     } else {
    //         Flasher::setFlash('Data Pegawai', 'Gagal', 'Diubah', 'danger');
    //         header('Location: ' . BASEURL . '/pegawai');
    //         exit;
    //     }
    // }

    // public function cari()
    // {
    //     $data['icon'] = 'fas fa-user-tie';
    //     $data['judul'] = 'Daftar Pegawai';
    //     $data['pegawai'] = $this->model('Pegawai_model')->cariDataPegawai();
    //     $this->view('templates/header', $data);
    //     $this->view('pegawai/index', $data);
    //     $this->view('templates/footer');
    // }
}
