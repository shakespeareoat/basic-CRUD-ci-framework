<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html', 'path');
		$this->load->model('Myhis_model');
		$this->load->library('form_validation');
		if (!$this->session->userdata('member_status') == "ADMIN") {
			redirect('login');
		}

	}

	public function index()
	{
		$this->load->model('Type_model');
		$this->data['title'] = 'Home | MYHIS';
		$this->data['category'] = $this->Type_model->category_show();
		$this->data['type'] = $this->Type_model->type_show();
		$this->data['myhis'] = $this->Myhis_model->myhis_show();
		$this->load->view('admin/v_home', $this->data);
	}
	

}

/* End of file Home_c.php */
/* Location: ./application/controllers/Home_c.php */