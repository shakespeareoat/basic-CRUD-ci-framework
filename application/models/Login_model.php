<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();		
	}
	public function authentication($email,$password)
   {
   $this->db->select('*');
   $this->db->from('tb_member');
   $this->db->where(['member_email'=>$email]);
   $return = $this->db->get('');
   		if ($return->num_rows() > 0) 
		{

			foreach ($return->result() as $row) 
			{
				$this->load->model('Hash_model');
				if (!$this->Hash_model->hash_verify($password, $row->member_pass)) {
					  $this->session->set_flashdata('error_login',' Invalid  Email and Password. Please try again.');
					redirect('login');
				}
				else
				{

						$data= $this->db->get_where('tb_member', ['member_email'=>$email]);
					
						foreach ($data->result() as $row) 
						{
							$newdata = array('member_id' => $row->member_id,'member_email' => $row->member_email,'member_name' => $row->member_name,'member_status' => $row->member_status);

							$this->session->set_userdata($newdata);
						}
					 if ($row->member_status==="ADMIN") {
						redirect('administration/home');
					 }
					 else{
					 	echo "USER";
					 }

						//redirect('administration/main');
		
				}
			}
		}

		else
		{
			  $this->session->set_flashdata('error_login',' Invalid User E-mail or Password. Please try again.');
		redirect('login');
		}  
}
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */