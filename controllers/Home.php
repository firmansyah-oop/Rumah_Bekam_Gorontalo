<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_controller
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
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['icon'] = 'fa fa-home';
        $data['judul'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    	    	
    }
}
