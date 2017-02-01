<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function validasi($u,$p)
	{
		$enkripsi = md5($p);
		$this->db->where('username', $u);
		$this->db->where('password', $enkripsi);
		$query = $this->db->get('admin');
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row) {
				$login = array(
						'username' => $row->username
					);
			}
			$this->session->set_userdata($login);
			redirect(base_url('index.php/panel'));
		}
		else
		{
			$this->session->set_flashdata('notif','Username or Password is Invalid');
			redirect(base_url('index.php/login'));
		}

	}

	public function direct_to_panel()
	{
		$user = $this->session->userdata('username');
		if(!empty($user))
		{
			redirect(base_url('index.php/panel'));
		}
	}

	public function direct_to_login()
	{
		$user = $this->session->userdata('username');
		if(empty($user))
		{
			$this->session->sess_destroy();
			redirect(base_url('index.php/login'));
		}
	}
}