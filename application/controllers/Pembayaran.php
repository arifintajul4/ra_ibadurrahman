<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
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
		$data['title'] = 'Pembayaran';
		$data['pembayaran'] = $this->Model_app->join_three('pembayaran', 'siswa', 'tagihan_siswa', 'tagihan', 'nis', 'id_tagihan_siswa', 'id_tagihan', 'id', 'desc');
		
		$this->template->load('admin/template', 'pembayaran/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Pembayaran';
		if(isset($_GET['id'])){

			$data['tagihan'] = $this->Model_app->join_three_where('tagihan_siswa', 'tagihan', 'siswa','id_tagihan', 'id_tagihan_siswa', 'nis', ['tagihan_siswa.id_tagihan_siswa' => $_GET['id']]);
			//var_dump($data['tagihan']); die;
			$this->template->load('admin/template', 'pembayaran/tambah', $data);

		}else if(isset($_POST['submit'])){

			$id_tagihan_siswa = $this->input->post('id_tagihan_siswa');
			$jumlah_bayar = (int)$this->input->post('jumlah');
			$tagihan = $this->db->get_where('tagihan_siswa', ['id_tagihan_siswa' => $id_tagihan_siswa])->row();

			$metode_bayar = $this->input->post('metode');
			
			if($metode_bayar == 'Tabungan'){
				$tabungan = $this->db->get_where('tabungan', ['nis' =>$this->input->post('nis')])->row();
				$saldo = (int)$tabungan->saldo;
				$sisa_saldo = $saldo - $jumlah_bayar;

				$data_t = [
					'saldo' => $sisa_saldo,
				];

				$this->db->where('nis', $this->input->post('nis'));
				if($this->db->update('tabungan', $data_t)){
					$trx_tabungan = [
						'nis' => $this->input->post('nis'),
						'jenis' => 'keluar',
						'nominal' => $jumlah_bayar,
						'ket' => 'Pembayaran '.$this->input->post('jenis'),
						'tanggal' => $this->input->post('tanggal'),
					];
					if(!$this->db->insert('transaksi_tabungan', $trx_tabungan)){
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Data Pembayaran!</div>');
            			redirect('pembayaran/tambah');
					}

				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Data Pembayaran!</div>');
            		redirect('pembayaran/tambah');
				}
			}
			$sisa = (int)$tagihan->sisa - $jumlah_bayar;

			$data = [
				'nis' => $this->input->post('nis'),
				'id_tagihan_siswa' => $id_tagihan_siswa,
				'jumlah' => $this->input->post('jumlah'),
				'status_bayar' => ($sisa == 0)? 'Lunas' : 'Belum Lunas',
				'metode_bayar' => $metode_bayar,
				'tgl_bayar' => $this->input->post('tanggal'),
			];

			$data2 = [
				'status' => ($sisa == 0)? 'Lunas' : 'Belum Lunas',
				'sisa' => $sisa,
			];

			if( $this->db->insert('pembayaran', $data) && $this->db->where('id_tagihan_siswa', $id_tagihan_siswa)->update('tagihan_siswa', $data2) ){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah Data Pembayaran</div>');
            	redirect('pembayaran');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Tambah Data Pembayaran!</div>');
            	redirect('pembayaran/tambah');
			}

		}else{
			$data['tagihan'] = NULL;
			$this->template->load('admin/template', 'pembayaran/tambah', $data);
		}
	}
}