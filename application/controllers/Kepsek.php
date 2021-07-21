<?php

/**
 * 
 */
class Kepsek extends CI_Controller
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

		$data['title'] = "Dashboard";
		$data['subtitle'] = "";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('kepsek');
		$this->load->view('templates/footer');
	}
}
