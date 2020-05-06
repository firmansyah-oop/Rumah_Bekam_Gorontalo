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
        $this->session->set_flashdata('tambah', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan</div>');
        redirect('pegawai');

    }

    public function hapus($id_pegawai)
    {
        $where= array('id_pegawai' =>$id_pegawai);
        $this->m_pegawai->hapusData($where, 'tb_pegawai');
        $this->session->set_flashdata('hapus', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus</div>');
        redirect('pegawai');
    }

    public function ubahData($id_pegawai)
    {
     // tampilan ubah data
        $where = array('id_pegawai' => $id_pegawai);
            
        $data['pegawai'] = $this->m_pegawai->ubahData($where, 'tb_pegawai')->result();
        $id_role =$this->db->get_where('user', ['username' => $this->session->userdata('id_role')])->row_array();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['icon'] = 'fas fa-user-tie';
        $data['judul'] = 'Daftar Pegawai';

        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function prosesUbahData()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $nip = $this->input->post('nip');
        $jabatan = $this->input->post('jabatan');

        $data = array(
            'id_pegawai' => $id_pegawai,
            'nama_pegawai' => $nama_pegawai,
            'nip' =>$nip,
            'jabatan' => $jabatan
            
        );
        $where = [ 'id_pegawai' =>$id_pegawai];
        $this->m_pegawai->prosesUbahData($where, $data, 'tb_pegawai');
        $this->session->set_flashdata('ubah', '<div class="alert alert-success" role="alert"> Data Berhasil Diubah</div>');
        redirect('pegawai');
    }
}
