<?php

class Detailsm extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}
	}

	public function detail($id)
	{

		$data['title'] = "";
		$data['subtitle'] = "";

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('templates/navbar', $data);
		$this->load->view('kepalasekolah/detailsm');
		$this->load->view('templates/footer');
	}
}
