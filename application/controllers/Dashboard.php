<?php

/**
 * 
 */
class Dashboard extends CI_Controller
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

		$data['title'] = "Dashboard";
		$data['subtitle'] = "";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
}
