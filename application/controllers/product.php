<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	
	public function index($index = 0)
	{
		$this->load->model('mproduct');
		$data['list'] = $this->mproduct->findall();
		$this->load->view('show_page',$data);
	}
	
}
?>