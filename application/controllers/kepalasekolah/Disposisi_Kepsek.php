<?php

class Disposisi_kepsek extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}
	}

	public function index()
	{

		$data['title'] = "Disposisi";
		$data['subtitle'] = "";
		$data['url'] = "kepalasekolah/disposisi_kepsek";
		$data['disposisi'] = $this->db->order_by('id_dp', 'desc')->get('disposisi')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('kepalasekolah/disposisi_kepsek', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{

		$data['title'] = "Disposisi";
		$data['subtitle'] = "";
		$data['url'] = "kepalasekolah/detaildp";
		$data['disposisi'] = $this->db->get_where('disposisi', ['id_dp' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('kepalasekolah/detaildp');
		$this->load->view('templates/footer');
	}
}
