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
}