<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabungan extends CI_Controller
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
		$data['title'] = 'Tabungan Siswa';
		$data['record'] = $this->Model_app->view_join_one('tabungan', 'siswa', 'nis', 'id', 'desc');
		$this->template->load('admin/template', 'siswa/tabungan', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Tabungan';
		if (isset($_POST['submit'])){
            $data = [
                'nis'=>$this->db->escape_str($this->input->post('nis')),
                'jenis'=>$this->db->escape_str($this->input->post('jenis')),
                'nominal'=>$this->db->escape_str($this->input->post('nominal')),
                'ket'=>$this->db->escape_str($this->input->post('keterangan')),
                'tanggal' =>$this->input->post('tanggal')
            ];
            $this->Model_app->insert('transaksi_tabungan',$data);
            $this->session->set_flashdata('message',
            '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menambah Data!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
            $tabungan1['siswa'] = $this->Model_app->view_where('tabungan', ['nis' => $this->input->post('nis')])->row();
            $tabungan['nis'] = $this->input->post('nis');

            if(isset($tabungan1['siswa'])){
                if($this->input->post('jenis') == 'masuk'){
                    $nominal = $this->input->post('nominal');
                    $saldo = $tabungan1['siswa']->saldo;
                    $tabungan['saldo'] = (int)$nominal + (int)$saldo;
                }else if($this->input->post('jenis') == 'keluar'){
                    $nominal = $this->input->post('nominal');
                    $saldo = $tabungan1['siswa']->saldo;
                    $tabungan['saldo'] = (int)$saldo - (int)$nominal;
                }else{
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-danger alert-dismissible" role="alert">Gagal Menambah Data!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                }
                $this->Model_app->update('tabungan', $tabungan, ['nis' => $this->input->post('nis')]);
            }else{
                if($this->input->post('jenis') == 'masuk'){
                    $tabungan['saldo'] = $this->input->post('nominal');
                    $this->Model_app->insert('tabungan', $tabungan);
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-success alert-dismissible" role="alert">Berhasil Menambah Data!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                }else{
                    $this->session->set_flashdata('message',
                    '<div class="alert alert-danger alert-dismissible" role="alert">Gagal Menambah Data!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>');
                }
            }
            redirect('tabungan');
        }else{
			$this->template->load('admin/template', 'tabungan/tambah', $data);
        }
	}
}