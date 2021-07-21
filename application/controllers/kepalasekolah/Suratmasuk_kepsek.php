<?php

class Suratmasuk_kepsek extends CI_Controller
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

		$data['title'] = "Surat Masuk";
		$data['subtitle'] = "";
		$data['url'] = "kepalasekolah/suratmasuk_kepsek";
		$data['surat_masuk'] = $this->db->get('surat_masuk')->result_array();  // Produces: SELECT * FROM surat_masuk


		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('kepalasekolah/suratmasuk_kepsek', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{

		$data['title'] = "Surat Masuk";
		$data['subtitle'] = "";
		$data['surat_masuk'] = $this->db->get_where('surat_masuk', ['id_sm' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('kepalasekolah/detailsm');
		$this->load->view('templates/footer');
	}
}
