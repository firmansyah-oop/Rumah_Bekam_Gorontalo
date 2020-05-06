<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');	
	}
	// tampilan halaman login
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() == false)
		{
			$data['judul'] = 'RGB Halaman Login';
			$this->load->view('templates/login_header', $data);
			$this->load->view('login/login');
			$this->load->view('templates/login_footer');
		}else{
			$this->login();
		}
		
	}

	private function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' =>$username])->row_array();

		// jika username ada
		if ($user) {
			// jika username aktiv
			if ($user['is_aktiv'] == 1) {
				// jika password aktiv
				if (password_verify($password, $user['password'])) {
					// pengambilan data dari database
					$data = [
						'username' => $user['username'],
						'id_role' => $user['id_role']
					];

					$this->session->set_userdata($data);
					// pengecekan id_role
					if ($user['id_role'] == 1) {
						redirect('home');
					}else{
						redirect('home');
					}
					

				}else{
					// jika password salah
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password salah</div>');
					redirect('login');
				}
			}
		}else{
			// jika username salah
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Username salah</div>');
			redirect('login');
		}
	}

	// fungsi registrasi
	public function registrasi()
	{
		// validasi data register

	// validasi nama
		$this->form_validation->set_rules('NamaLengkap', 'Nama Lengkap', 'required|trim');
	// validasi username
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]',[
				'is_unique' => 'Username sudah pernah digunakan'
			]);
	// validasi password
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
				'matches' => 'Konfirmasi password salah!',
				'min_length' => 'Password minimal harus 3 karakter'
			]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

	// jika data tidak valid
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'RBG Halaman Registrasi';
			$this->load->view('templates/login_header', $data);
			$this->load->view('login/registrasi');
			$this->load->view('templates/login_footer');
		}else
		{
	// jika data valid
			// pengambilan data dari inputan
			$data = [
				'NamaLengkap' => htmlspecialchars($this->input->post('NamaLengkap', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'id_role' => 1,
				'is_aktiv' =>1
			];
			// memasukkan data inputan ke database
			$this->db->insert('user', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Akun anda berhasil di daftarkan. Silahkan Login</div>');
			redirect('login');
		}
	}

// fungsi logout
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_role');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Anda berhasil logout</div>');
			redirect('login');
	}
}