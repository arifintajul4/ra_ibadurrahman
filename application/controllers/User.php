<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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
		redirect('auth/profile');
	}

	public function profile()
	{
		$data['title'] = 'Profil User';
		$data['user'] = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row();
		$this->template->load('admin/template', 'master/user/profile', $data);
	}

	public function ubah_pass()
	{
		$data['title'] = 'Ubah Password';

		$this->form_validation->set_rules('pass_lama', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('pass_baru', 'Password Baru', 'trim|required|min_length[3]|matches[konfir_pass]');
		$this->form_validation->set_rules('konfir_pass', 'Konfirmasi Password', 'trim|required|min_length[3]|matches[pass_baru]');
		
		if($this->form_validation->run() == TRUE){
			$pass_lama = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row()->password;
			$inputpass = $this->input->post('pass_lama');

			if(password_verify($inputpass, $pass_lama)){
				$password = password_hash($this->input->post('pass_baru'), PASSWORD_DEFAULT);
				$this->db->set('password', $password);
	            $this->db->where('username', $this->session->userdata('username'));
				if($this->db->update('users')){
					redirect('auth/logout', 'refresh');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Ubah Password Gagal!</div>');
					redirect('user/ubah_pass', 'refresh');
				}

			}else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Lama Salah!</div>');
				redirect('user/ubah_pass', 'refresh');
			}
		}else{
			$this->template->load('admin/template', 'master/user/ubah_pass', $data);
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'nama_lengkap' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'no_tlp' => $this->input->post('no_telp'),
			];
			$this->db->where('username', $id);
			$this->db->update('users', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Ubah Data!</div>');
			redirect('user/profile', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Gagal Ubah Data!</div>');
			redirect('user/profile', 'refresh');
		}
	}

}