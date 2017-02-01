<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->login_model->direct_to_login();
		$data['title'] = "Panel Admin";
		$this->load->view('admin/panel/panel', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}