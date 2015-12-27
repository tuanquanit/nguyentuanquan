<?php
	Class Show_lis extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('Lis_product');
		}
		
		public function hienthi()
		{
			echo "<pre>";
			print_r($this->lis_product->function_tbl());
			echo "</pre>";
		}
	}
?>
