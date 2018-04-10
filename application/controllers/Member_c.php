<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_c extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html', 'path');
		$this->load->model('Member_model');
		$this->load->library('form_validation');
			if (!$this->session->userdata('member_status') == "ADMIN") {
			redirect('login');
		}

	}

	public function index()
	{
		
	}
	public function show_member()
	{
		$this->data['title']='Member | MYHIS';
		$this->data['member'] = $this->Member_model->member_show();
		$this->load->view('admin/v_member', $this->data);
	}
	public function add_member()
	{
		$this->form_validation->set_rules('user','user','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_rules('pass','pass','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_rules('name','name','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_rules('status','status','required',array('required'=> '*กรอกข้อมูลให้ครบ'));
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if ($this->form_validation->run() ) 
		{
			$user = $this->input->post('user');
			$pass= $this->input->post('pass');
			$this->load->model('Hash_model');
			$passx = $this->Hash_model->hash_string($pass);
			$name = $this->input->post('name');
			$status = $this->input->post('status');
			$insert = ([
				'member_email'=>$user,
				'member_pass'=>$passx,
				'member_name'=>$name,
				'member_status'=>$status
			]);
			$data = array_merge($insert);
			//print_r($data);
			if ($this->Member_model->insert_member($data)== false) {
				$this->session->set_flashdata('success_add',' Success Insert Data.');
				redirect('administration/member');
			}
			else
			{
				redirect('administration/member');
			}
		}
		else
		{	
			//echo validation_errors(); 
		$this->data['title']='Add Member | MYHIS';
		$this->load->view('admin/v_insert_member', $this->data, FALSE);
	}
	}
	public function delete_member($id)  //del cmodel
    {
        if ($this->Member_model->del_member($id) == false) {
            $this->session->set_flashdata('success_del', 'Success Delete Data.');
        }
        redirect('administration/member');
    }


}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */