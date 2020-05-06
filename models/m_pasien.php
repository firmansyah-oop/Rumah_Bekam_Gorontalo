<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_model
{

	public function get_data()
	{
		return $this->db->get('tb_pasien')->result_array();
	}

	public function prosesTambahData()
	{
		$data = [
			'tgl_regis_pasien' => $this->input->post('tgl_regis_pasien'),
			'nama_pasien' => $this->input->post('nama_pasien'),
			'nik' => $this->input->post('nik'),
			'jk' => $this->input->post('jk'),
			'umur' => $this->input->post('umur'),
			'no_hp' => $this->input->post('no_hp'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
		];

		$this->db->insert('tb_pasien', $data);
	}

	public function hapusData($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ubahData($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function prosesUbahData($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
