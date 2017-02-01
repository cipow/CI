<?php 

	// include css
	$data['title'] = $title;
	$this->load->view('admin/head', $data);

	// include navbar
	$this->load->view('admin/panel/navbar/navbar_top');
	$this->load->view('admin/panel/navbar/navbar_side');
	
	// konten isi
	$this->load->view('admin/panel/content');
	// include js
	$this->load->view('admin/foot');
 ?>