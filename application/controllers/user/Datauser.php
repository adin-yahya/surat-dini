<?php

class Datauser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}
		if ($this->session->userdata('role') == 2) {
			redirect('kepsek');
		}
	}
	public function index()
	{
		$data['title'] = "Data User";
		$data['subtitle'] = "";
		$data['url'] = "user/datauser";
		$data['datauser'] = $this->db->order_by('id_user', 'desc')->get('datauser')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/datauser');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$id = htmlspecialchars($this->input->post('id_user', true));
		$nama = htmlspecialchars($this->input->post('nama', true));
		$username = htmlspecialchars($this->input->post('username', true));
		$role = htmlspecialchars($this->input->post('role', true));
		$telp = htmlspecialchars($this->input->post('telp', true));
		$email = htmlspecialchars($this->input->post('email', true));
		$password = htmlspecialchars($this->input->post('password', true));


		$data = [
			'id_user' => $id,
			'nama_user' => $nama,
			'username' => $username,
			'role' => $role,
			'telp' => $telp,
			'email' => $email,
			'password' => $password,
		];

		$this->db->insert('datauser', $data);
		redirect('user/datauser');
	}
	public function hapus($id)
	{
		$this->db->delete('datauser', ['id_user' => $id]);
		redirect('user/datauser');
	}
	public function update()
	{
		$id = htmlspecialchars($this->input->post('id_user', true));
		$nama = htmlspecialchars($this->input->post('nama', true));
		$username = htmlspecialchars($this->input->post('username', true));
		$role = htmlspecialchars($this->input->post('role', true));
		$telp = htmlspecialchars($this->input->post('telp', true));
		$email = htmlspecialchars($this->input->post('email', true));
		$password = htmlspecialchars($this->input->post('password', true));


		$data = [
			'nama_user' => $nama,
			'username' => $username,
			'role' => $role,
			'telp' => $telp,
			'email' => $email,
			'password' => $password,
		];
		$this->db->where('id_user', $id);
		$this->db->update('datauser', $data);

		redirect('user/datauser');
	}
}
