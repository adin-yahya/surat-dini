<?php

class Laporan extends CI_Controller
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
		$data['title'] = "Laporan";
		$data['subtitle'] = "";
		$data['url'] = "user/laporan";

		$this->load->view('user/laporan');
	}
}
