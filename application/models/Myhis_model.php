<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myhis_model extends CI_Model {

	public function myhis_show()   //fn show data 
	{	
	$this->db->select('tb_myhis.*,tb_type.name as typename, tb_category.name as categoryname');
	$this->db->from('tb_myhis');
	$this->db->join('tb_type', 'tb_type.id = tb_myhis.type_id');
	$this->db->join('tb_category', 'tb_category.id = tb_myhis.category_id');
	$this->db->order_by('id','DES');
	$data = $this->db->get();
	return $data;
	}
	public function edit_myhis($id)   //show data update 
	{ 
	$data=$this->db->where(['id'=>$id])
	->get("tb_myhis");
	if ($data->num_rows() > 0) 
	{ 
		return $data->row();

	}
	}

		public function insert_myhis($data) //insert  database
	{
		$this->db->insert('tb_myhis',$data);

	}
	public function update_myhis($data, $id) //update data
	{
	$this->db->where('id', $id);
	$this->db->update('tb_myhis', $data);
	}
	public function del_myhis($id)   //del data
	{
	$this->db->where('id',$id);
	$this->db->delete('tb_myhis');
	}
}

/* End of file Myhis_model.php */
/* Location: ./application/models/Myhis_model.php */