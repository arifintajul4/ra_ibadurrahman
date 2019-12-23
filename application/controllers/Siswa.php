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
		$this->template->load('admin/template', 'siswa/index', $data);
	}

    public function tambah()
    {
        if(isset($_POST['submit'])){
            $data = [
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'alamat' => $this->input->post('alamat_ortu'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'no_telp' => $this->input->post('no_telp_ortu')
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
}