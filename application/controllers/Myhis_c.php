<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myhis_c extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html', 'path');
		//$this->load->model('Type_model');
		$this->load->model('Myhis_model');
		$this->load->library('form_validation');
			if (!$this->session->userdata('member_status') == "ADMIN") {
			redirect('login');
		}

	}

	public function index()
	{
		
	}
	public function add_myhis(){
		$this->form_validation->set_rules('title','title','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_rules('subtitle','subtitle','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_rules('category','category','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_rules('type','type','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$title = $this->input->post('title');
			$subtitle= $this->input->post('subtitle');
			$category = $this->input->post('category');
			$type = $this->input->post('type');
			$insert = ([
				'title'=>$title,
				'sub_title'=>$subtitle,
				'category_id'=>$category,
				'type_id'=>$type
			]);
			$data = array_merge($insert);
			print_r($data);
			if ($this->Myhis_model->insert_myhis($data)== false) {
				$this->session->set_flashdata('success_add',' Success Insert Data.');
				redirect('administration/home');
			}
			else
			{
				redirect('administration/home');
			}
		}
		else
		{	
			//echo validation_errors(); 
			redirect('administration/home');	
	}
		
	}
		public function edit_myhis($id){
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('subtitle','subtitle','required');
		$this->form_validation->set_rules('category','category','required');
		$this->form_validation->set_rules('type','type','required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$title = $this->input->post('title');
			$subtitle= $this->input->post('subtitle');
			$category = $this->input->post('category');
			$type = $this->input->post('type');
			$insert = ([
				'title'=>$title,
				'sub_title'=>$subtitle,
				'category_id'=>$category,
				'type_id'=>$type
			]);
			$data = array_merge($insert);
			print_r($data);
			if ($this->Myhis_model->update_myhis($data,$this->input->post('id'))== false) {
				$this->session->set_flashdata('success_add',' Success Update Data.');
				redirect('administration/home');
			}
			else
			{
				redirect('administration/home');
			}
		}
		else
		{	
		$this->load->model('Type_model');
		$this->data['title'] = 'Home | MYHIS';
		$this->data['category'] = $this->Type_model->category_show();
		$this->data['type'] = $this->Type_model->type_show();
		$this->data['myhis'] = $this->Myhis_model->edit_myhis($id);
		$this->load->view('admin/v_edit_myhis', $this->data);
				
	}	
	}
	public function del_myhis($id)  //del cmodel
    {
        if ($this->Myhis_model->del_myhis($id) == false) {
            $this->session->set_flashdata('success_add', 'Success Delete Data.');
        }
        redirect('administration/home');
    }
    	public function ep_myhis($id){
		$this->form_validation->set_rules('ep_p','ep_p','required');
		$this->form_validation->set_rules('type','type','required');
		$this->form_validation->set_rules('note','note','required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$ep_p = $this->input->post('ep_p');
			$type= $this->input->post('type');
			$note = $this->input->post('note');
			$insert = ([
				'EP_P'=>$ep_p,
				'type_id'=>$type,
				'note'=>$note
			]);
			$data = array_merge($insert);
			print_r($data);
			if ($this->Myhis_model->update_myhis($data,$this->input->post('id'))== false) {
				$this->session->set_flashdata('success_add',' Success Update Data.');
				redirect('administration/home');
			}
			else
			{
				redirect('administration/home');
			}
		}
		else
		{	
		$this->load->model('Type_model');
		$this->data['title'] = 'EP UPDATE | MYHIS';
		$this->data['type'] = $this->Type_model->type_show();
		$this->data['myhis'] = $this->Myhis_model->edit_myhis($id);
		$this->load->view('admin/v_update_myhis', $this->data);
				
	}	
	}


}

/* End of file Myhis_c.php */
/* Location: ./application/controllers/Myhis_c.php */