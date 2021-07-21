<?php

class Arsip_kepsek extends CI_Controller
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

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('templates/navbar', $data);
		$this->load->view('kepalasekolah/arsip_kepsek');
		$this->load->view('templates/footer');
	}
}
