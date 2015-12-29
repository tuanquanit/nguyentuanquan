<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Filecontroller extends CI_Controller {
	
		public function laydulieu()
		{
			$this->load->model('Filemoduls');
			$data['mang'] = $this->Filemoduls->danhsachsanpham(); 
			$this->load->view('Fileview',$data);
		}
	
	}
	
	/* End of file Filecontroller.php */
	/* Location: ./application/controllers/Filecontroller.php */
?>