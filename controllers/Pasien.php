<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_controller
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
        $data['pasien'] = $this->m_pasien->get_data();
        $data['icon'] = 'fas fa-user-tie';
        $data['judul'] = 'Daftar Pasien';

        $this->load->view('templates/header', $data);
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
	}

	public function tambahData()
	{
		$id_role =$this->db->get_where('user', ['username' => $this->session->userdata('id_role')])->row_array();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->model('m_pasien');
        $data['pasien'] = $this->m_pasien->get_data();
        $data['icon'] = 'fas fa-user-tie';
        $data['judul'] = 'Daftar Pasien';

        $this->load->view('templates/header', $data);
        $this->load->view('pasien/tambah', $data);
        $this->load->view('templates/footer');
	}
	public function prosesTambahData()
	{
		$this->m_pasien->prosesTambahData();
		$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan</div>');
		redirect('pasien');
	}

	public function ubahData()
	{ 
		$where = array('id_pasien' =>['id_pasien']);
			
		$data['pasien'] = $this->m_pasien->ubahData($where, 'tb_pasien')->result();

		// tampilan setelah di ubah data
		$id_role =$this->db->get_where('user', ['username' => $this->session->userdata('id_role')])->row_array();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['icon'] = 'fas fa-user-tie';
        $data['judul'] = 'Daftar Pasien';

        $this->load->view('templates/header', $data);
        $this->load->view('pasien/ubah', $data);
        $this->load->view('templates/footer');

	}

	public function prosesUbahData()
	{

	}
}