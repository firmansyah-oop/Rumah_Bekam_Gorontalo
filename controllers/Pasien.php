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

	public function hapus($id_pasien)
	{
		$where= array('id_pasien' =>$id_pasien);
		$this->m_pasien->hapusData($where, 'tb_pasien');
		$this->session->set_flashdata('hapus', '<div class="alert alert-success" role="alert"> Data Berhasil Dihapus</div>');
		redirect('pasien');
	}


	public function ubahData($id_pasien)
	{
	 // tampilan ubah data
		$where = array('id_pasien' => $id_pasien);
			
		$data['pasien'] = $this->m_pasien->ubahData($where, 'tb_pasien')->result();
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
		$id_pasien = $this->input->post('id_pasien');
		$tgl_regis_pasien = $this->input->post('tgl_regis_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$nik = $this->input->post('nik');
		$jk = $this->input->post('jk');
		$umur = $this->input->post('umur');
		$no_hp = $this->input->post('no_hp');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');

		$data = array(
			'id_pasien' => $id_pasien,
			'tgl_regis_pasien' => $tgl_regis_pasien,
			'nama_pasien' =>$nama_pasien,
			'nik' => $nik,
			'jk' => $jk,
			'umur' => $umur,
			'no_hp' => $no_hp,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat
		);
		$where = [ 'id_pasien' =>$id_pasien];
		$this->m_pasien->prosesUbahData($where, $data, 'tb_pasien');
		$this->session->set_flashdata('ubah', '<div class="alert alert-success" role="alert"> Data Berhasil Diubah</div>');
		redirect('pasien');
	}
}
