<?php

class Bukuagendasm extends CI_Controller
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
		$data['title'] = "Buku Agenda Surat Masuk";
		$data['subtitle'] = "";
		$data['url'] = "user/bukuagendasm";
		$data['suratmasuk'] = [];
		$data['dari'] = null;
		$data['sampai'] = null;

		if (isset($_POST['submit'])) {
			$data['suratmasuk'] = $this->db->where(['tgl_terima >=' => $this->input->post('dari'), 'tgl_terima <=' => $this->input->post('sampai')])->get('surat_masuk')->result_array();
			$data['dari'] = $this->input->post('dari');
			$data['sampai'] = $this->input->post('sampai');
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/bukuagendasm', $data);
		$this->load->view('templates/footer');
	}
	public function search()
	{
		$dari = htmlspecialchars($this->input->post('dari', true));
		$sampai = htmlspecialchars($this->input->post('sampai', true));
		$filter = htmlspecialchars($this->input->post('filter', true));
	}
	public function pdf($dari, $sampai)
	{
		$data['titel'] = "Laporan PDF";
		$data['suratmasuk'] = $this->db->where(['tgl_terima >=' => $dari, 'tgl_terima <=' => $sampai])->get('surat_masuk')->result_array();
		$data['dari'] = $dari;
		$data['sampai'] = $sampai;
		$this->load->helper('pdf_helper');

		$this->load->view('user/pdfbukusm', $data);
	}
}
