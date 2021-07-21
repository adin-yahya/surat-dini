<?php

class Bukuagendask extends CI_Controller
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
		$data['title'] = "Buku Agenda Surat Keluar";
		$data['subtitle'] = "";
		$data['url'] = "user/bukuagendasm";
		$data['suratkeluar'] = [];
		$data['dari'] = null;
		$data['sampai'] = null;

		if (isset($_POST['submit'])) {
			$data['suratkeluar'] = $this->db->where(['tgl_surat >=' => $this->input->post('dari'), 'tgl_surat <=' => $this->input->post('sampai')])->get('surat_keluar')->result_array();
			$data['dari'] = $this->input->post('dari');
			$data['sampai'] = $this->input->post('sampai');
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/bukuagendask', $data);
		$this->load->view('templates/footer');
	}
	public function search()
	{
		$dari = htmlspecialchars($this->input->post('dari', true));
		$sampai = htmlspecialchars($this->input->post('sampai', true));
	}
	public function pdf($dari, $sampai)
	{
		$data['titel'] = "Laporan PDF";
		$data['suratkeluar'] = $this->db->where(['tgl_surat >=' => $dari, 'tgl_surat <=' => $sampai])->get('surat_keluar')->result_array();
		$data['dari'] = $dari;
		$data['sampai'] = $sampai;
		$this->load->helper('pdf_helper');

		$this->load->view('user/pdfbukusk', $data);
	}
}
