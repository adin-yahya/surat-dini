<?php

class Detaildp extends CI_Controller
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

		$data['title'] = "Detail Disposisi";
		$data['subtitle'] = "";

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_kepsek');
		$this->load->view('templates/navbar', $data);
		$this->load->view('kepalasekolah/detaildp');
		$this->load->view('templates/footer');
	}
	public function pdf($id)
	{
		$data['disposisi'] = $this->db->get_where('disposisi', ['id_dp' => $id])->row_array();
		$data['isi'] = htmlspecialchars($this->input->post('isi'));

		$this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "laporan-petanikode.pdf";
	    $this->pdf->load_view('kepalasekolah/pdfdp', $data);
	}
}
