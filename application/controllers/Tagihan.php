<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">Silahkan Login Terlebih Dahulu!</div>');
            redirect('auth');
        }

	}

	public function index()
	{
		$data['title'] = 'Tagihan';
		$data['tagihan'] = $this->db->get('tagihan')->result_array();
		$this->template->load('admin/template', 'tagihan/index', $data);
	}

	public function tambah()
	{
		if(isset($_POST['submit']))
		{
			$data = [
				'tahun_ajar' => $this->input->post('tahun'),
				'jenis' => $this->input->post('jenis'),
				'nominal' => $this->input->post('nominal'),
			];

			if($this->db->insert('tagihan', $data)){
				$id_tagihan = $this->db->insert_id();
				$siswa = $this->db->get_where('siswa', ['tahun_ajaran' => $this->input->post('tahun') ])->result_array();
				//var_dump($siswa); die;
				foreach ($siswa as $s) {
					$data = [
						'nis' => $s['nis'],
						'id_tagihan' => $id_tagihan,
						'status' => 'Belum Lunas',
						'nominal' => $this->input->post('nominal'),
					];
					$this->db->insert('tagihan_siswa', $data);
				}
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Data Tagihan</div>');
            	redirect('tagihan');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gagal Tambah Tagihan!</div>');
            	redirect('tagihan');
			}

		}else{
			redirect('tagihan');
		}
	}
}