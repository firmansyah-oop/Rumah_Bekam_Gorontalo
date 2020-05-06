<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('tb_pegawai')->result_array();
    }

    public function prosesTambahData()
	{
		$data = [
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'nip' => $this->input->post('nip'),
			'jabatan' => $this->input->post('jabatan')
		];

		$this->db->insert('tb_pegawai', $data);
	}
}