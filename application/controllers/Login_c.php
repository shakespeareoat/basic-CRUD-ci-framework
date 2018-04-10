<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'html');
        $this->load->library('form_validation');
        $this->load->model('Login_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('v_login');
    }
    public function user_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run()) {
            $email= $this->input->post('email');
            $password= $this->input->post('password');
            $this->Login_model->authentication($email, $password);
        } else {
            redirect('login', 'refresh');
        }
    }
    public function logout() //logout
    {
        $this->session->sess_destroy();
        //  $sess_array = array('id','email','name');
        // $this->session->unset_userdata($sess_array);
        redirect('administration_login', 'refresh');
    }
}


/* End of file Login_c.php */
/* Location: ./application/controllers/Login_c.php */