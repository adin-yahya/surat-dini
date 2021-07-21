<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('id')) {
			if ($this->session->userdata('role') == 1) {
				redirect('dashboard');
			} else {
				redirect('kepsek');
			}
		}

		$this->load->view('auth/login');
	}
	public function masuk()
	{

		$username = htmlspecialchars($this->input->post('username', true));
		$password = htmlspecialchars($this->input->post('password', true));

		$user = $this->db->get_where('datauser', ['username' => $username])->row_array();

		if ($user) {
			if ($password != $user['password']) {
				echo "password salah";
				die();
				redirect('login');
			} else {
				$data = array(
					'id' => $user['id_user'],
					'name' => $user['nama_user'],
					'username'  => $user['username'],
					'role'     => $user['role'],
				);

				$this->session->set_userdata($data);

				if ($user['role'] == 1) {
					redirect('dashboard');
				} else {
					redirect('kepsek');
				}
			}
		} else {
			echo "username tidak ada";
			die();
			redirect('login');
		}
	}

	public function keluar()
	{
		session_destroy();
		redirect('login');
	}
}
