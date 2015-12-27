<?php
	Class Ctl extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function hienthi()
		{
			$this->load->library('test');
			echo $this->test->hoten();
		}
	}
?>