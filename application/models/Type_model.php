<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends CI_Model {

	public function type_show()   //fn show data 
	{	
	$this->db->select('*');
	$this->db->from('tb_type');
	$this->db->order_by('name','asc');
	$data = $this->db->get();
	return $data;
	}
	public function type_edit_show($id)   //show data update 
	{ 
	$data=$this->db->where(['id'=>$id])
	->get("tb_type");
	if ($data->num_rows() > 0) 
	{ 
		return $data->row();

	}
	}

		public function insert_type($data) //insert  database
	{
		$this->db->insert('tb_type',$data);

	}
	public function update_type($data, $id) //update data
	{
	$this->db->where('id', $id);
	$this->db->update('tb_type', $data);
	}
	public function del_type($id)   //del data
	{
	$this->db->where('id',$id);
	$this->db->delete('tb_type');
	}

		public function category_show()   //fn show data 
	{	
	$this->db->select('*');
	$this->db->from('tb_category');
	$this->db->order_by('name','asc');
	$data = $this->db->get();
	return $data;
	}
	public function category_edit_show($id)   //show data update 
	{ 
	$data=$this->db->where(['id'=>$id])
	->get("tb_category");
	if ($data->num_rows() > 0) 
	{ 
		return $data->row();

	}
	}

		public function insert_category($data) //insert  database
	{
		$this->db->insert('tb_category',$data);

	}
	public function update_category($data, $id) //update data
	{
	$this->db->where('id', $id);
	$this->db->update('tb_category', $data);
	}
	public function del_category($id)   //del data
	{
	$this->db->where('id',$id);
	$this->db->delete('tb_category');
	}
}

/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */