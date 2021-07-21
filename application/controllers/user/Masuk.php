<?php

class Masuk extends CI_Controller
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
		$data['title'] = "Surat Masuk";
		$data['subtitle'] = "";
		$data['url'] = "user/masuk";
		$data['surat_masuk'] = $this->db->order_by('id_sm', 'desc')->get('surat_masuk')->result_array();  // Produces: SELECT * FROM surat_masuk

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/masuk', $data);
		$this->load->view('templates/footer');
	}
	public function tambah()
	{
		$id = htmlspecialchars($this->input->post('id_sm', true));
		$no_surat = htmlspecialchars($this->input->post('no_surat', true));
		$perihal = htmlspecialchars($this->input->post('perihal', true));
		$tgl_surat = htmlspecialchars($this->input->post('tgl_surat', true));
		$tgl_terima = htmlspecialchars($this->input->post('tgl_terima', true));
		$pengirim = htmlspecialchars($this->input->post('pengirim', true));
		$keterangan = htmlspecialchars($this->input->post('keterangan', true));
		$file = $_FILES['data'];
		$foto = null;
		if ($file!=''){
			$config['upload_path'] = './assets/suratmasuk';
			$config['allowed_types'] = 'jpg|jpeg|png|pdf|docx|';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('data')){
				echo "Upload Gagal"; die();
			}else{
				$foto = $this->upload->data('file_name');
			}
		}
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$tanggal = mdate($datestring, $time);
		$data = [
			'id_sm' => $id,
			'no_surat' => $no_surat,
			'perihal' => $perihal,
			'tgl_surat' => $tgl_surat,
			'tgl_terima' => $tgl_terima,
			'pengirim' => $pengirim,
			'keterangan' => $keterangan,
			'file' => $foto,
			'tgl_input' => $tanggal,
		];
		$this->db->insert('surat_masuk', $data);
		redirect('user/masuk');
	}
	public function hapus($id)
	{
		$this->db->delete('surat_masuk', ['id_sm' => $id]);
		redirect('user/masuk');
	}
	public function update()
	{
		$id = htmlspecialchars($this->input->post('id_sm'));
		$no_surat = htmlspecialchars($this->input->post('no_surat'));
		$perihal = htmlspecialchars($this->input->post('perihal', true));
		$tgl_surat = htmlspecialchars($this->input->post('tgl_surat', true));
		$tgl_terima = htmlspecialchars($this->input->post('tgl_terima', true));
		$pengirim = htmlspecialchars($this->input->post('pengirim', true));
		$keterangan = htmlspecialchars($this->input->post('keterangan', true));
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$tanggal = mdate($datestring, $time);


		$data = [
			'no_surat' => $no_surat,
			'perihal' => $perihal,
			'tgl_surat' => $tgl_surat,
			'tgl_terima' => $tgl_terima,
			'pengirim' => $pengirim,
			'keterangan' => $keterangan,
			'tgl_input' => $tanggal,
		];

		$this->db->where('id_sm', $id);
		$this->db->update('surat_masuk', $data);

		redirect('user/masuk');
	}
	public function input()
	{
		$data['title'] = "Surat Masuk";
		$data['subtitle'] = "";
		$data['url'] = "user/inputsm";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/inputsm', $data);
		$this->load->view('templates/footer');
	}
	public function edit($id)
	{
		$data['title'] = "Surat Masuk";
		$data['subtitle'] = "";
		$data['url'] = "user/editsm";
		$data['surat_masuk'] = $this->db->get_where('surat_masuk', ['id_sm' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/editsm', $data);
		$this->load->view('templates/footer');
	}
}
