<?php

class Keluar extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}
		// if ($this->session->userdata('role') == 2) {
		// 	redirect('kepsek');
		// }
	}
	
	public function index()
	{
		$data['title'] = "Surat Keluar";
		$data['subtitle'] = "";
		$data['url'] = "user/keluar";
		$data['surat_keluar'] = $this->db->order_by('id_sk', 'desc')->get('surat_keluar')->result_array();  // Produces: SELECT * FROM surat_keluar

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/keluar', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$id = htmlspecialchars($this->input->post('id_sm', true));
		$no_surat = htmlspecialchars($this->input->post('no_surat', true));
		$tgl_surat = htmlspecialchars($this->input->post('tgl_surat', true));
		$perihal = htmlspecialchars($this->input->post('perihal', true));
		$lampiran = htmlspecialchars($this->input->post('lampiran', true));
		$penerima = htmlspecialchars($this->input->post('penerima', true));
		$keterangan = htmlspecialchars($this->input->post('keterangan', true));

		$pembuka_sk = htmlspecialchars($this->input->post('pembuka_sk', true));
		$isi_sk = htmlspecialchars($this->input->post('isi_sk', true));
		$penutup_sk = htmlspecialchars($this->input->post('penutup_sk', true));
		
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$tanggal = mdate($datestring, $time);


		$data = [
			'id_sk' => $id,
			'no_surat' => $no_surat,
			'tgl_surat' => $tgl_surat,
			'perihal' => $perihal,
			'lampiran' => $lampiran,
			'penerima' => $penerima,
			'keterangan' => $keterangan,
			'pembuka_sk' => $pembuka_sk,
			'isi_sk' => $isi_sk,
			'penutup_sk' => $penutup_sk,
			'tgl_input' => $tanggal,
		];
		$this->db->insert('surat_keluar', $data);
		redirect('user/keluar');
	}
	public function hapus($id)
	{
		$this->db->delete('surat_keluar', ['id_sk' => $id]);
		redirect('user/keluar');
	}
	public function update()
	{
		$id = htmlspecialchars($this->input->post('id_sk', true));
		$no_surat = htmlspecialchars($this->input->post('no_surat', true));
		$tgl_surat = htmlspecialchars($this->input->post('tgl_surat', true));
		$perihal = htmlspecialchars($this->input->post('perihal', true));
		$lampiran = htmlspecialchars($this->input->post('lampiran', true));
		$penerima = htmlspecialchars($this->input->post('penerima', true));
		$keterangan = htmlspecialchars($this->input->post('keterangan', true));

		$pembuka_sk = htmlspecialchars($this->input->post('pembuka_sk', true));
		$isi_sk = htmlspecialchars($this->input->post('isi_sk', true));
		$penutup_sk = htmlspecialchars($this->input->post('penutup_sk', true));
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$tanggal = mdate($datestring, $time);
		$data = [
			'no_surat' => $no_surat,
			'tgl_surat' => $tgl_surat,
			'perihal' => $perihal,
			'lampiran' => $lampiran,
			'penerima' => $penerima,
			'keterangan' => $keterangan,
			'pembuka_sk' => $pembuka_sk,
			'isi_sk' => $isi_sk,
			'penutup_sk' => $penutup_sk,
			'tgl_input' => $tanggal,
		];
		$this->db->where('id_sk', $id);
		$this->db->update('surat_keluar', $data);
		redirect('user/keluar');
	}
	public function buatsurat($id)
	{
		$data['title'] = "Surat Keluar";
		$data['subtitle'] = "";
		$data['url'] = "user/buatsurat";
		$data['id'] = $id;

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/buatsurat', $data);
		$this->load->view('templates/footer');
	}

	public function pdf($id)
	{
		$data['surat_keluar'] = $this->db->get_where('surat_keluar', ['id_sk' => $id])->row_array();
		$data['isi'] = $this->input->post('isi');
		$data['pembuka'] = $this->input->post('pembuka');
		$data['penutup'] = $this->input->post('penutup');

		$this->load->library('pdf');

	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "Surat Keluar.pdf";
	    $this->pdf->load_view('user/pdf_buatsurat', $data);
		// $this->load->view('user/pdf_buatsurat', $data);
	}
	public function input()
	{
		$data['title'] = "Surat Keluar";
		$data['subtitle'] = "";
		$data['url'] = "user/inputsk";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/inputsk', $data);
		$this->load->view('templates/footer');
	}
	public function edit($id)
	{
		$data['title'] = "Surat Keluar";
		$data['subtitle'] = "";
		$data['url'] = "user/editsk";
		$data['surat_keluar'] = $this->db->get_where('surat_keluar', ['id_sk' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/editsk', $data);
		$this->load->view('templates/footer');
	}
}
