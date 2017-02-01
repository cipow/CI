<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gbookcontroller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('gbookmodel');
	}

	public function index()
	{
		$data['isi']	= $this->gbookmodel->ambil();
		$this->load->view('gbook/gbookview',$data);
	}
	
	public function tambah()
	{
		if($this->input->post('kirim'))
		{
			$this->form_validation->set_rules('nama', 'NAMA', 'trim|required');
			$this->form_validation->set_rules('email', 'EMAIL', 'trim|required');
			$this->form_validation->set_rules('hp', 'NO HP', 'trim|required');
			$this->form_validation->set_rules('pesan', 'PESAN', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('gbook/gbookform');
			} else {
				$query = $this->gbookmodel->input();
				if($query)
				{
					$this->session->set_flashdata('notif', 'Berhasil Di Input');
					redirect(base_url('gbookcontroller'));
				}
			}
		}
		else
		{
			$this->load->view('gbook/gbookform');
		}
	}

	public function edit($id)
	{
		if($this->input->post('update'))
		{
			$data = array(
				'nama'	=> $this->input->post('nama'),
				'email'	=> $this->input->post('email'),
				'hp'	=> $this->input->post('hp'),
				'pesan'	=> $this->input->post('pesan')
			);

			$this->db->where('id', $id)->update('gbook', $data);
			if($this->db->affected_rows())
			{
				$this->session->set_flashdata('notif', 'Data di Update');
				redirect(base_url('gbookcontroller'));
			}
		}
		else
		{
			$data['id']	= $this->db->where('id',$id)->get('gbook')->row();
			$this->load->view('gbook/gbookedit', $data);
		}
	}

	public function hapus($id)
	{
		$this->gbookmodel->delete($id);
		if($this->db->affected_rows())
		{
			$this->session->set_flashdata('notif', 'Berhasil Di Hapus');
			redirect(base_url('gbookcontroller'));
		}
		else
		{
			$this->session->set_flashdata('notif', 'Gagal Di Hapus');
			redirect(base_url('gbookcontroller'));
		}
	}

}

/* End of file gbook.php */
/* Location: ./application/controllers/gbook.php */