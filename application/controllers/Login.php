<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->login_model->direct_to_panel();
		$data['title'] = "Login | Admin";
		$this->load->view('admin/login/form_login', $data);
	}

	public function check()
	{
		$user = $this->input->post('user');
		$pass =	$this->input->post('pass');
		$this->login_model->validasi($user,$pass);
	}

	Public function logout(){
        session_destroy();
        redirect(base_url());
    }

}