<?php

	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class Filemoduls extends CI_Model {
	 function __construct()
		 {
		 	parent::__construct();
		 } 
		 public function danhsachsanpham()
		 {
		 	return $this->db->select('*')->from('prodouct')-get()->result_array();
		 }
	 }
	 
	 /* End of file Filemoduls.php */
	 /* Location: ./application/models/Test1/Filemoduls.php */ 
?>