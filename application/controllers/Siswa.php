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