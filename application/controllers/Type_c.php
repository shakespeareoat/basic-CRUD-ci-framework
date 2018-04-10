<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_c extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html', 'path');
		$this->load->model('Type_model');
		$this->load->library('form_validation');
			if (!$this->session->userdata('member_status') == "ADMIN") {
			redirect('login');
		}

	}

	public function show_type()
	{
		$this->data['type']=$this->Type_model->type_show();
		$this->data['title']= 'type | MYHIS';
		$this->load->view('admin/v_type', $this->data);
	}
	public function add_type()
	{
		$this->form_validation->set_rules('name_type','name_type','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$name = $this->input->post('name_type');
			$insert = ([
				'name'=>$name,
			]);
			$data = array_merge($insert);
			//print_r($data);
			if ($this->Type_model->insert_type($data)== false) {
				$this->session->set_flashdata('success_add',' Success Insert Data.');
				redirect('administration/type');
			}
			else
			{
				redirect('administration/type');
			}
		}
		else
		{
			$this->show_type();
			//echo validation_errors(); 
		}	
	
	}
	public function show_edit_type($id)
	{
		$this->data['type']=$this->Type_model->type_edit_show($id);
		$this->data['title']= 'edit type | MYHIS';
		$this->load->view('admin/v_edit_type', $this->data);
	}
	public function edit_type()
	{
		$this->form_validation->set_rules('name_type','name_type','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$name = $this->input->post('name_type');
			$update = ([
				'name'=>$name,
			]);
			$data = array_merge($update);
			//print_r($data);
			if ($this->Type_model->update_type($data,$this->input->post('id'))== false) {
				$this->session->set_flashdata('success_add',' Success Update Data.');
				redirect('administration/type');
			}
			else
			{
				redirect('administration/type');
			}
		}
		else
		{
			$this->show_type();
			//echo validation_errors(); 
		}	
	
	}
	public function delete_type($id)  //del cmodel
    {
        if ($this->Type_model->del_type($id) == false) {
            $this->session->set_flashdata('success_del', 'Success Delete Data.');
        }
        redirect('administration/type');
    }

    public function show_category()
	{
		$this->data['category']=$this->Type_model->category_show();
		$this->data['title']= 'type | MYHIS';
		$this->load->view('admin/v_category', $this->data);
	}
	public function add_category()
	{
		$this->form_validation->set_rules('name_category','name_category','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$name = $this->input->post('name_category');
			$insert = ([
				'name'=>$name,
			]);
			$data = array_merge($insert);
			//print_r($data);
			if ($this->Type_model->insert_category($data)== false) {
				$this->session->set_flashdata('success_add',' Success Insert Data.');
				redirect('administration/category');
			}
			else
			{
				redirect('administration/category');
			}
		}
		else
		{
			$this->show_category();
			//echo validation_errors(); 
		}	
	
	}
	public function show_edit_category($id)
	{
		$this->data['category']=$this->Type_model->category_edit_show($id);
		$this->data['title']= 'edit category | MYHIS';
		$this->load->view('admin/v_edit_category', $this->data);
	}
	public function edit_category()
	{
		$this->form_validation->set_rules('name_category','name_category','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$name = $this->input->post('name_category');
			$update = ([
				'name'=>$name,
			]);
			$data = array_merge($update);
			//print_r($data);
			if ($this->Type_model->update_category($data,$this->input->post('id'))== false) {
				$this->session->set_flashdata('success_add',' Success Update Data.');
				redirect('administration/category');
			}
			else
			{
				redirect('administration/category');
			}
		}
		else
		{
			$this->show_category();
			//echo validation_errors(); 
		}	
	
	}
	public function delete_category($id)  //del cmodel
    {
        if ($this->Type_model->del_category($id) == false) {
            $this->session->set_flashdata('success_del', 'Success Delete Data.');
        }
        redirect('administration/category');
    }
}

/* End of file Type_c.php */
/* Location: ./application/controllers/Type_c.php */