<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $filename = "import_data";
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
		$data['title'] = 'Dashboard';
		//var_dump($data['pemeliharaan']); die;
		$this->template->load('admin/template', 'home/index', $data);
	}

	public function identitas()
	{
		$data['title'] = 'Identitas Sekolah';

		if (isset($_POST['submit'])){
			$config['upload_path'] = 'assets/images/logo';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '1024'; // kb
            $config['file_name'] = 'Logo';
            $config['overwrite'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('logo');
            $hasil = $this->upload->data();
            //var_dump($hasil); die;
            if ($hasil['file_name']==''){
            	$data = array('nama_sekolah'=>$this->db->escape_str($this->input->post('nama_sekolah')),
                                'alamat'=>$this->db->escape_str($this->input->post('alamat')),
                                'no_telp'=>$this->db->escape_str($this->input->post('no_telp')),
                            );
            }else{
            	$data = array('nama_sekolah'=>$this->db->escape_str($this->input->post('nama_sekolah')),
                                'alamat'=>$this->db->escape_str($this->input->post('alamat')),
                                'no_telp'=>$this->db->escape_str($this->input->post('no_telp')),
                                'favicon'=>$hasil['file_name']
                            );
            }
	    	$where = array('id_identitas' => $this->input->post('id'));
			$this->Model_app->update('identitas', $data, $where);
			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Berhasil Update Identitas Sekolah!</div>');
			redirect('home/identitas');
		}else{
			$data['record'] = $this->Model_app->edit('identitas', ['id_identitas' => 1])->row_array();
			$this->template->load('admin/template','identitas',$data);
		}
	}

}