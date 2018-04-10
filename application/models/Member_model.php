<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function member_show()   //fn show data 
	{	
	$this->db->select('*');
	$this->db->from('tb_member');
	$this->db->order_by('member_email','asc');
	$data = $this->db->get();
	return $data;
	}
	public function insert_member($data) //insert  database
	{
		$this->db->insert('tb_member',$data);

	}
	public function del_member($id)   //del data
	{
	$this->db->where('member_id',$id);
	$this->db->delete('tb_member');
	}
}

/* End of file Member_model.php */
/* Location: ./application/models/Member_model.php */