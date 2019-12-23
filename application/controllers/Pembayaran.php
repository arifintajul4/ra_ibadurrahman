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
		$this->template->load('admin/template', 'pembayaran/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Pembayaran';
		$this->template->load('admin/template', 'pembayaran/tambah', $data);
	}
}