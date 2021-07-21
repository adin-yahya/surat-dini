<?php

class Disposisi extends CI_Controller
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


	public function listDisposisi($id_sm)
	{
		$data['title'] = "Surat Masuk";
		$data['subtitle'] = "Disposisi";
		$data['url'] = "user/disposisi";
		$data['id_sm'] = $id_sm;
		$data['disposisi'] = $this->db->get_where('disposisi', ['id_sm' => $id_sm])->result_array();  // Produces: SELECT * FROM disposisi
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/disposisi', $data);
		$this->load->view('templates/footer');
	}
	public function tambah($id_sm)
	{
		$id = htmlspecialchars($this->input->post('id', true));
		$no_surat = htmlspecialchars($this->input->post('no_surat', true));
		$tanggal = htmlspecialchars($this->input->post('tgl_dp', true));
		$pengirim = htmlspecialchars($this->input->post('pengirim', true));
		$tujuan_dp = htmlspecialchars($this->input->post('tujuan_dp', true));
		$sifat = htmlspecialchars($this->input->post('sifatsurat', true));
		$keterangan = htmlspecialchars($this->input->post('keterangan', true));

		$data = [
			'id_dp' => $id,
			'id_sm' => $id_sm,
			'no_surat' => $no_surat,
			'tgl_dp' => $tanggal,
			'pengirim' => $pengirim,
			'tujuan_dp' => $tujuan_dp,
			'sifatsurat' => $sifat,
			'keterangan' => $keterangan,
		];
		$this->db->insert('disposisi', $data);
		redirect('user/disposisi/listDisposisi/'.$id_sm);
	}
	public function hapus($id,$id_sm)
	{
		$this->db->delete('disposisi', ['id_dp' => $id]);
		redirect('user/disposisi/listDisposisi/'.$id_sm);
	}
	public function update($id_sm)
	{
		$id = htmlspecialchars($this->input->post('id_dp', true));
		$no_surat = htmlspecialchars($this->input->post('no_surat', true));
		$tanggal = htmlspecialchars($this->input->post('tgl_dp', true));
		$pengirim = htmlspecialchars($this->input->post('pengirim', true));
		$tujuan_dp = htmlspecialchars($this->input->post('tujuan_dp', true));
		$sifat = htmlspecialchars($this->input->post('sifatsurat', true));
		$keterangan = htmlspecialchars($this->input->post('keterangan', true));

		$data = [
			'no_surat' => $no_surat,
			'tgl_dp' => $tanggal,
			'pengirim' => $pengirim,
			'tujuan_dp' => $tujuan_dp,
			'sifatsurat' => $sifat,
			'keterangan' => $keterangan,
		];
		$this->db->where('id_dp', $id);
		$this->db->update('disposisi', $data);
		redirect('user/disposisi/listDisposisi/'.$id_sm);
	}
	public function detail($id)
	{

		$data['title'] = "Disposisi";
		$data['subtitle'] = "";
		$data['url'] = "user/detaildispo";
		$data['disposisi'] = $this->db->get_where('disposisi', ['id_dp' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/detaildispo');
		$this->load->view('templates/footer');
	}
}
