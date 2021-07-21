<?php

class Detaildispo extends CI_Controller
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

	public function detail($id)
	{

		$data['title'] = "Detail Disposisi";
		$data['subtitle'] = "";

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar', $data);
		$this->load->view('user/detaildispo');
		$this->load->view('templates/footer');
	}
	public function pdf($id)
	{
		$data['title'] = "Laporan PDF";
		$data['disposisi'] = $this->db->where('id_dp', $id)->get('disposisi')->row_array();
		$this->load->helper('pdf_helper');

		$this->load->view('user/pdfdp', $data);
	}
}
