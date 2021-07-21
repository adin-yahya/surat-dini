<?php

class Suratkeluar_kepsek extends CI_Controller
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

		$data['title'] = "Surat Keluar";
		$data['subtitle'] = "";
		$data['url'] = "kepalasekolah/suratmasuk_kepsek";
		$data['surat_keluar'] = $this->db->get('surat_keluar')->result_array();  // Produces: SELECT * FROM surat_masuk


		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('kepalasekolah/suratkeluar_kepsek', $data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{

		$data['title'] = "Surat Keluar";
		$data['subtitle'] = "";
		$data['surat_keluar'] = $this->db->get_where('surat_keluar', ['id_sk' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('kepalasekolah/detailsk');
		$this->load->view('templates/footer');
	}
}
