<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getAlldata()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('users_groups', 'users_groups.user_id = users.id');
		$this->db->join('groups', 'groups.id = users_groups.group_id');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function getDataId($id)
	{
		$this->db->select('*');
		$this->db->from('m_berita_acara');
		$this->db->join('m_pelanggan', 'm_pelanggan.id = m_berita_acara.pelanggan_id');
		$this->db->join('m_vendor', 'm_vendor.id = m_berita_acara.vendor_id');
		$this->db->where('id', $id);
		$result = $this->db->get()->result_array();
		return $result;
	}
}
