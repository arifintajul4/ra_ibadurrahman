<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
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
		$data['title'] = 'Laporan';
		$this->template->load('admin/template','laporan/index',$data);
	}

	public function harian()
	{
		$data['title'] = 'Laporan Harian';
		$data['identitas'] = $this->db->get_where('identitas', ['id_identitas' => 1])->row();
		$sekarang = date('Y-m-d');
		$data['tabungan'] = $this->Model_app->view_join_where('transaksi_tabungan', 'siswa', 'nis',['tanggal' => $sekarang], 'no_transaksi', 'ASC');
	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "laporan-harian.pdf";
	    $this->pdf->load_view('laporan/harian', $data);
		//$this->load->view('laporan/harian', $data);

	}
}