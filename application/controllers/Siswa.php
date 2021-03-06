<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
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
		$data['title'] = 'Data Siswa';
		$data['record'] = $this->db->get('siswa')->result_array();
        $data['kelas'] = $this->Model_app->view_group('siswa', 'kelas');
        //var_dump($data['kelas']);die;
		$this->template->load('admin/template', 'siswa/index', $data);
	}

    public function cetak()
    {
        if(isset($_POST['submit'])){
            $data['identitas'] = $this->db->get_where('identitas', ['id_identitas' => 1])->row();
            

            if($_POST['kelas'] != 'semua'){
                $data['kls'] = $_POST['kelas'];
                $data['siswa'] = $this->db->get_where('siswa', ['kelas' => $_POST['kelas'], 'tahun_ajaran' => $_POST['tahun_ajaran']])->result_array();
            }else{
                $data['kelas'] = $this->Model_app->view_group('siswa', 'kelas');
                $data['siswa'] = $this->db->get_where('siswa', ['tahun_ajaran' => $_POST['tahun_ajaran']])->result_array();
            }
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'potrait');
            $this->pdf->filename = "laporan-data-siswa.pdf";
            $this->pdf->load_view('laporan/data_siswa', $data);
        }else{
            redirect('home');
        }
    }

    public function tambah()
    {
        if(isset($_POST['submit'])){
            $data = [
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'no_telp_ortu' => $this->input->post('no_telp_ortu')
            ];
            $this->db->insert('orang_tua', $data);
            $id_orang_tua = $this->db->insert_id();

            if($id_orang_tua != 0){
                $data = [
                    'nis' => $this->input->post('nis'),
                    'nama' => $this->input->post('nama'),
                    'no_tlp' => $this->input->post('no_telp'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'agama' => $this->input->post('agama'),
                    'jk' => $this->input->post('jk'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'alamat' => $this->input->post('alamat'),
                    'kelas' => $this->input->post('kelas'),
                    'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                    'id_orang_tua' => $id_orang_tua
                ];
                if($this->db->insert('siswa', $data)){
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data Siswa Berhasil</div>');
                    redirect('siswa');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tambah Data Siswa Gagal!</div>');
                    redirect('siswa/tambah');
                }
            }
            
        }else{
            $data['title'] = 'Tambah Data Siswa';
            $this->template->load('admin/template', 'siswa/tambah', $data);
        }
        
    }

    public function detail($nis)
    {
        $data['title'] = "Detail Siswa";
        $data['siswa'] = $this->db->get_where('siswa', ['nis' => $nis])->row();
        $data['ortu'] = $this->db->get_where('orang_tua', ['id_orang_tua' => $data['siswa']->id_orang_tua])->row();
        $data['tagihan'] = $this->Model_app->view_join_where('tagihan_siswa', 'tagihan', 'id_tagihan', ['nis' => $nis], 'id_tagihan_siswa', 'DESC');
        $data['tabungan'] = $this->db->get_where('transaksi_tabungan', ['nis' => $nis])->result_array();
        //var_dump($data['tabungan']); die;
        $this->template->load('admin/template', 'siswa/detail', $data);
    }

	function get_datasiswa(){
        echo json_encode($this->Model_app->view_where('tabungan', ['nis' => $_POST['id']])->row());
    }

    function get_namasiswa(){
        if(isset($_GET['term'])) {
            $result = $this->Model_app->search_nama($_GET['term']);
            //var_dump($result); die;
            if(count($result) > 0){
                foreach ($result as $siswa) {
                    $arr_result[] = [
                        'label' => $siswa->nama,
                        'value' => $siswa->nis
                    ];
                }
                echo json_encode($arr_result); 
            }
        }
    }

    public function edit($nis)
    {

        if(isset($_POST['submit'])){
            $data = [
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'no_telp_ortu' => $this->input->post('no_telp_ortu')
            ];
            $id_orang_tua = $this->input->post('id_orang_tua');
            $this->db->where('id_orang_tua', $id_orang_tua);
            $this->db->update('orang_tua', $data);

            if($id_orang_tua != 0){
                $data = [
                    'nama' => $this->input->post('nama'),
                    'no_tlp' => $this->input->post('no_telp'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'agama' => $this->input->post('agama'),
                    'jk' => $this->input->post('jk'),
                    'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                    'alamat' => $this->input->post('alamat'),
                    'kelas' => $this->input->post('kelas'),
                    'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                    'id_orang_tua' => $id_orang_tua
                ];
                if($this->db->update('siswa', $data, ['nis' => $nis])){
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah Data Siswa Berhasil</div>');
                    redirect('siswa/detail/'.$nis);
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ubah Data Siswa Gagal!</div>');
                    redirect('siswa/edit/'.$nis);
                }
            }
            
        }else{
            $data['title'] = 'Ubah Data Siswa';
            $siswa = $this->Model_app->view_join_where('siswa', 'orang_tua', 'id_orang_tua', ['siswa.nis' => $nis], 'nis', 'asc');
            $data['siswa'] = $siswa[0];
            $this->template->load('admin/template', 'siswa/edit', $data);
        }
    }

    public function hapus($nis)
    {
        $tagihan = $this->db->get_where('tagihan_siswa', ['nis' => $nis ])->result_array();
        //var_dump($tagihan); die;
        $this->db->delete('transaksi_tabungan', ['nis' => $nis]);
        $this->db->delete('tabungan', ['nis' => $nis]);
        foreach ($tagihan as $t) {
            $this->db->delete('pembayaran', ['id_tagihan_siswa' => $t['id_tagihan_siswa']]);
        }
        $this->db->delete('tagihan_siswa', ['nis' => $nis]);

        if($this->db->delete('tabungan', ['nis' => $nis])){
            if($this->db->delete('siswa', ['nis' => $nis])){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus Data Siswa Berhasil</div>');
                redirect('siswa');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus Data Siswa Gagal!</div>');
                redirect('siswa');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus Data Siswa Gagal!</div>');
            redirect('siswas');
        }
    }
}