<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gbookmodel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function input()
	{
		$data = array(
				'nama'	=> $this->input->post('nama'),
				'email'	=> $this->input->post('email'),
				'hp'	=> $this->input->post('hp'),
				'pesan'	=> $this->input->post('pesan'),
				'sempak'	=> $this->input->post('sempak')
			);
		
		return $this->db->insert('gbook', $data);
	}

	public function ambil()
	{
		return $this->db->get('gbook')->result();
	}

	public function delete($id)
	{
		return $this->db->where('id', $id)->delete('gbook');
	}

}

/* End of file gbookmodel.php */
/* Location: ./application/models/gbookmodel.php */